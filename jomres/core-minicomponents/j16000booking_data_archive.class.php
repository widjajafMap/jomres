<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000booking_data_archive
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$rows = array ();

		$output[ 'PAGETITLE' ] = jr_gettext( "_JOMRES_DATA_ARCHIVE_TITLE", _JOMRES_DATA_ARCHIVE_TITLE,false );
		$output[ 'INFO' ]      = jr_gettext( "_JOMRES_DATA_ARCHIVE_TITLE_DESC", _JOMRES_DATA_ARCHIVE_TITLE_DESC,false );

		$output[ '_JOMRES_SORTORDER_PROPERTYNAME' ]             = jr_gettext( "_JOMRES_SORTORDER_PROPERTYNAME", _JOMRES_SORTORDER_PROPERTYNAME,false );
		$output[ '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED' ] = jr_gettext( "_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED", _JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED,false );

		$query  = "SELECT id,data,date FROM #__jomres_booking_data_archive";
		$result = doSelectSql( $query );
		foreach ( $result as $res )
			{
			$r = array ();
			// data comes in two arrays, tmpbooking and tmpguest. We'll cycle through these two sub arrays to construct the popup's contents.
			$popup_content = "";
			$data_arrays   = unserialize( $res->data );

			if ( (int) $data_arrays[ 'tmpbooking' ][ 'property_uid' ] > 0 )
				{
				$property_uid = (int) $data_arrays[ 'tmpbooking' ][ 'property_uid' ];
				$r[ 'PROPERTY_NAME' ] = getPropertyName( $property_uid );

				foreach ( $data_arrays[ 'tmpbooking' ] as $key => $val )
					{

					$popup_content .= "<b>" . $key . "</b> : " . str_replace( '"', '', $val ) . " ::: ";
					}
				foreach ( $data_arrays[ 'tmpguest' ] as $key => $val )
					{
					$popup_content .= "<b>" . $key . "</b> : " . str_replace( '"', '', $val ) . " ::: ";
					}

				$data               = jomres_makeTooltip( "xxx" . $res->id, $r[ 'PROPERTY_NAME' ], $popup_content, $res->date );
				$r[ 'DATE_TOOTIP' ] = $data;

				$rows[ ] = $r;
				}
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext( "_JRPORTAL_CANCEL", _JRPORTAL_CANCEL,false ) );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'booking_data_archive.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}