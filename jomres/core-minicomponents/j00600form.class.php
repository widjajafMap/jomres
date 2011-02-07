<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Outgoing interrupt for credit card details
 #
* @package Jomres
#
 */
class j00600form {
	/**
	#
	 * Constructor: Constructs and displays the data for collecting credit card details
	#
	 */
	function j00600form($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$plugin="form";
		$bookingdata=$componentArgs['bookingdata'];
		//$bookingdata=$componentArgs['guestdata'];
		$output=array();

		//$specialReqs=jomresGetParam( $_POST, 'specialReqs', "" );
		//$output['HIDDEN']='<input type="hidden" name="specialReqs" value="'.$specialReqs.'">';
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$bookingdata['property_uid']."' AND plugin = '$plugin' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}

		$output['GATEWAY']=$plugin;
		$output['JR_GATEWAY_INTERRUPT_INFO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_INFO'.$plugin,"Please enter your creditcard details");
		$output['COM_MR_DISPGUEST_CCARDNO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNO'.$plugin,"Card number");
		$output['COM_MR_DISPGUEST_CCARDISS']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDISS'.$plugin,"Card issued");
		$output['COM_MR_DISPGUEST_CCARDEXPIRE']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDEXPIRE'.$plugin,"Card expires");
		$output['COM_MR_DISPGUEST_CCARISSNO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARISSNO'.$plugin,"Issue number");
		$output['COM_MR_DISPGUEST_CCARDNAME']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNAME'.$plugin,"Name on card");
		$output['COM_MR_DISPGUEST_CCV']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_'.$plugin,"Verification code (on back of card)");

		$iss_mon = jomresHTML::integerSelectList( 01, 12, 1, 'iss_mon', 'size="1" class="inputbox"', 0, "%02d" );
		$iss_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'iss_year', 'size="1" class="inputbox"', 0, "%02d" );
		$expiry_mon = jomresHTML::integerSelectList( 01, 12, 1, 'expiry_mon', 'size="1" class="inputbox"', 0, "%02d" );
		$expiry_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'expiry_year', 'size="1" class="inputbox"', 0, "%02d" );
		$issueno = jomresHTML::integerSelectList( 01, 100, 1, 'issueno', 'size="1" class="inputbox"', 0, "%02d" );

		$output['CCARD_ISSUED']=$iss_mon.$iss_year;
		$output['CCARD_EXPIRY']=$expiry_mon.$expiry_year;
		$output['CCARD_ISS_NO']=$issueno;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( get_showtime('ePointFilepath') );
		$tmpl->readTemplatesFromInput( 'j00600'.$plugin.'.html' );
		$tmpl->addRows( 'interrupt_outgoing', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();
		$plugin="form";
		
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_INFO'.$plugin,"Please enter your creditcard details");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNO'.$plugin,"Card number");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDISS'.$plugin,"Card issued");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDEXPIRE'.$plugin,"Card expires");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARISSNO'.$plugin,"Issue number");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNAME'.$plugin,"Name on card");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_'.$plugin,"Verification code (on back of card)");

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
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