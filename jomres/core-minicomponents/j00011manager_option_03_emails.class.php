<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 *
 * @package Jomres
#
 */
class j00011manager_option_03_emails
	{


	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		$property_uid=getDefaultProperty();
		$mrConfig=getPropertySpecificSettings($property_uid);
		
		if ( $mrConfig[ 'is_real_estate_listing' ] == '1' )
			return;

		$this->cpanelButton = jomres_mainmenu_option( jomresURL( JOMRES_SITEPAGE_URL . '&task=list_emails' ), 'EmailSend.png', "Email templates", null, jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS, false, false ) );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}

?>