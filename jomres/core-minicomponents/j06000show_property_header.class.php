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

class j06000show_property_header
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if (isset($componentArgs[ 'property_uid' ]))
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		elseif ( isset ( $_REQUEST['property_uid'] ))
			$property_uid = (int) $_REQUEST['property_uid'];
		else return;
		
		if (!user_can_view_this_property($property_uid))
			return;
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;
		
		$mrConfig = getPropertySpecificSettings($property_uid);

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $property_uid );
	
		$output     = array ();
		$pageoutput = array ();
		
		$show_property_header = intval( jomresGetParam( $_REQUEST, 'show_property_header', 1 ) );
		if ($show_property_header == 0)
			return;

		$stars     = $current_property_details->stars;
		$starslink = "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/blank.png\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\" alt=\"blank\" />";
		if ( $stars != "0" )
			{
			$starslink = "";
			for ( $i = 1; $i <= $stars; $i++ )
				{
				$starslink .= "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/star.png\" border=\"0\" alt=\"star\" />";
				}
			$starslink .= "";
			}

		if ( $current_property_details->superior == 1 ) 
			{
			$output[ 'SUPERIOR' ] = "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/superior.png\" alt=\"superior\" border=\"0\" />";
			}
		else
			{
			$output[ 'SUPERIOR' ] = '';
			}

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$jomres_media_centre_images->get_images($property_uid, array('property'));
		$output[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images ['property'][0][0]['large'];
		$output[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];
		$output[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images ['property'][0][0]['small'];
		if (is_null($output[ 'IMAGELARGE' ]))
			{
			$output[ 'IMAGELARGE' ]  = $jomres_media_centre_images->multi_query_images ['noimage-large'];
			$output[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->multi_query_images ['noimage-medium'];
			$output[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->multi_query_images ['noimage-small'];
			}
		
		$output['FEATURES']		= $MiniComponents->specificEvent( '06000', 'show_property_features',array('output_now'=>false, 'property_uid'=>$property_uid));
		$output['ROOMTYPES']	= $MiniComponents->specificEvent( '06000', 'show_property_room_types',array('output_now'=>false, 'property_uid'=>$property_uid));

		//meta data
		if ( strlen( $current_property_details->metatitle ) > 0 ) 
			{
			jomres_cmsspecific_setmetadata( "title", jomres_purify_html( $current_property_details->metatitle ) );
			}
		else
			{
			$property_name = getPropertyName( $property_uid );
			jomres_cmsspecific_setmetadata( "title", jomres_purify_html( $property_name ) );
			}

		if ( strlen( $current_property_details->metadescription ) > 0 )
			{
			jomres_cmsspecific_setmetadata( 'description', jomres_purify_html( $current_property_details->metadescription ) );
			}
		
		if ( strlen( $current_property_details->metakeywords ) > 0 ) 
			{
			jomres_cmsspecific_setmetadata( "keywords", jomres_purify_html( $current_property_details->metakeywords ) );
			}
		else
			{
			jomres_cmsspecific_setmetadata( 'keywords', $current_property_details->property_town . ", " . $current_property_details->property_region . ", " . $current_property_details->property_country );
			}

		//Facebook meta data
		jomres_cmsspecific_addcustomtag( '<meta property="og:url" content="' . jomres_cmsspecific_currenturl() . '" />' );
		jomres_cmsspecific_addcustomtag( '<meta property="og:type" content="article" />' );
		jomres_cmsspecific_addcustomtag( '<meta property="og:title" content="' . jomres_decode($current_property_details->property_name) . '" />' );
		jomres_cmsspecific_addcustomtag( '<meta property="og:description" content="' . jomres_decode(jr_substr( strip_tags(  $current_property_details->property_description  ), 0, 200 )) . '...' . '" />' );
		jomres_cmsspecific_addcustomtag( '<meta property="og:image" content="' . $output[ 'IMAGELARGE' ] . '" />' );


		$output[ 'STARS' ]         = $starslink;
		$output[ 'PROPERTY_NAME' ] = $current_property_details->property_name;
		$output[ 'STREET' ]        = $current_property_details->property_street;
		$output[ 'TOWN' ]          = $current_property_details->property_town;
		$output[ 'REGION' ]        = $current_property_details->property_region;
		$output[ 'COUNTRY' ]       = $current_property_details->property_country;
		$output[ 'POSTCODE' ]      = $current_property_details->property_postcode;
		$output[ 'TELEPHONE' ]     = $current_property_details->property_tel;
		$output[ 'FAX' ]           = $current_property_details->property_fax;
		if ( $output[ 'TELEPHONE' ] != "" ) $output[ 'HTELEPHONE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE ) . ": ";
		if ( $output[ 'FAX' ] != "" ) $output[ 'HFAX' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX ) . ": ";

		if ( $mrConfig[ 'galleryLink' ] != "" )
			{
			// http://www.worldofwebcraft.com/blog.php?id=250
			$pattern = '/[^\pL\pN$-_.+!*\'\(\)\,\{\}\|\\\\\^\~\[\]`\<\>\#\%\"\;\/\?\:\@\&\=\.]/u';
			$url = preg_replace($pattern, '', $mrConfig[ 'galleryLink' ]);

			$output[ 'GALLERYLINK' ]   = str_replace( "&#38;#38;amp;", "&", $url );
			$domain                    = parse_url( str_replace( "&#38;#38;amp;", "&", $url ) );
			$output[ 'GALLERYDOMAIN' ] = $domain[ 'host' ];
			}

		$output[ 'JOMRES_TAPTOCALL' ] = jr_gettext( "JOMRES_TAPTOCALL", JOMRES_TAPTOCALL, false, false );

		$url                                     = make_gmap_url_for_property_uid( $property_uid );
		$qr_code_map                             = jomres_make_qr_code( str_replace(" ", "+",$url ) );
		$output[ 'QR_CODE_MAP' ]                 = $qr_code_map[ 'relative_path' ];
		$output[ '_JOMRES_SCAN_FOR_DIRECTIONS' ] = jr_gettext( '_JOMRES_SCAN_FOR_DIRECTIONS', _JOMRES_SCAN_FOR_DIRECTIONS, false );
		$output[ 'GMAP_LINK' ]                   = $url;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'featurelist', $featureList );
		$tmpl->addRows( 'roomtypes', $roomtypes );
		$tmpl->readTemplatesFromInput( 'property_header.html' );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
