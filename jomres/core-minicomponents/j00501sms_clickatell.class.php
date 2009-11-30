<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for gallery link input
 #
* @package Jomres
#
 */
class j00501sms_clickatell {
	/**
	#
	 * Constructor: Outputs the gallery link config inputs
	#
	 */
	function j00501sms_clickatell($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$configurationPanel=$componentArgs['configurationPanel'];
		jr_import('jrportal_sms_clickatell_settings');
		$sms_clickatell_settings = new jrportal_sms_clickatell_settings();
		$sms_clickatell_settings->get_sms_clickatell_settings();
		
		if ($sms_clickatell_settings->sms_clickatellConfigOptions['active'] == "1")
			{
			$mrConfig=getPropertySpecificSettings();
			$configurationPanel->startPanel(_JRPORTAL_SMS_CLICKATELL_TABTITLE);
			$configurationPanel->setleft(_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="50" name="cfg_sms_clickatell_notification_number" value="'.$mrConfig['sms_clickatell_notification_number'].'" />');
			$configurationPanel->setright(_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC);
			$configurationPanel->insertSetting();
			$configurationPanel->endPanel();
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>