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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06002reportbug {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06002reportbug($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $_VERSION;
		$jomresConfig_fromname=get_showtime('fromname');
		$jomresConfig_mailfrom=get_showtime('mailfrom');
		$jomresConfig_sitename=get_showtime('sitename');
		$jomresConfig_host=get_showtime('host');
		$jomresConfig_user=get_showtime('user');
		$jomresConfig_password=get_showtime('password');

		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->superPropertyManager)
			return;
		$mrConfig=getPropertySpecificSettings();
		if ($thisJRUser->superPropertyManager)
			{
			$link = mysql_connect($jomresConfig_host, $jomresConfig_user, $jomresConfig_password);
			$serverinfo=mysql_get_server_info();
			$currentPage = jomresGetParam( $_REQUEST, 'currentPage', '' );
		    $s=parseConfiguration();

			$safemode=$s["PHP Core"]['safe_mode'][1];
			$image="/jomres/images/jomresimages/small/EmailSend.png";
			$sitename="Site name : ".$jomresConfig_sitename;
			$joomlaUrl="CMS url : ".get_showtime('live_site');
			$jomresVersion="Jomres version : ".$mrConfig['version'];
			$joomlaVersion="CMS version : ".$_VERSION->PRODUCT.' '.$_VERSION->RELEASE.'.'.$_VERSION->DEV_LEVEL.' '.$_VERSION->DEV_STATUS;
			$phpVersion="PHP Version : ".phpversion();
			$safeMode="Safe Mode : ".$safemode;
			$mySqlVersion="MySql version : ".$serverinfo;
			$userAgent="User agent : ".$_SERVER['HTTP_USER_AGENT'];
			$serverSoftware="Server software : ".$_SERVER['SERVER_SOFTWARE'];
			$opSys="Operating system : ".php_uname ();

			$currentPage="Report triggered at page : ".get_showtime('live_site')."/".$currentPage;
			$yourreport="Your bug report : ";
			$adminLogin="Admin userid : admin";
			$adminPassword="Admin password : ";
			$guestLogin="Guest login  :";
			$guestPassword="Guest password :";

			$debug=$yourreport."\n";
			$debug.="\n";
			$debug.="\n";
			$debug.="\n";

			$debug.=$adminLogin."\n";
			$debug.=$adminPassword."\n";
			$debug.=$guestLogin."\n";
			$debug.=$guestPassword."\n";

			$debug.="\n";
			$debug.=$currentPage."\n";
			$debug.=$sitename."\n";
			$debug.=$joomlaUrl."\n";
			$debug.=$jomresVersion."\n";
			$debug.=$joomlaVersion."\n";
			$debug.=$phpVersion."\n";
			$debug.=$safeMode."\n";
			$debug.=$mySqlVersion."\n";
			$debug.=$userAgent."\n";
			$debug.=$serverSoftware."\n";
			$debug.=$opSys."\n";

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->customToolbarItem("SEND",jomresURL(JOMRES_SITEPAGE_URL."&task=sendbug&currentPage=$currentPage"),$text="Send Bug",$submitOnClick=true,$submitTask="sendbug",$image);
			$jrtb .= $jrtbar->endTable();

			$output['SENDBUTTON']=$jrtb;
			$output['DEBUGINFO']=$debug;
			$output['ADMINEMAIL']=$jomresConfig_mailfrom;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edit_bug.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
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