<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


class j06000mulistbookings {
	function j06000mulistbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $thisJRUser;
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ($thisJRUser->userIsRegistered)
			{
			$pageoutput=array();
			$output=array();
			$rows=array();
			$r=array();
			$allGuestUids=array();
			
			$query="SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int)$thisJRUser->id."' ";
			$guests_uids=doSelectSql($query);
			// Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
			if (count($guests_uids) > 0)
				{
				foreach ($guests_uids as $g)
					{
					$allGuestUids[]=$g->guests_uid;
					}
				
				$gOr = genericOr($allGuestUids,"guest_uid");
				$query="SELECT * FROM #__jomres_contracts WHERE ".$gOr." AND cancelled = 0 ORDER BY tag";
				$contracts=doSelectSql($query);
				if (count($contracts)>0)
					{
					$output['HARRIVAL']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL,$editable=false,$isLink=false);
					$output['HDEPARTURE']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE,$editable=false,$isLink=false);
					$output['HTOTAL']=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL,$editable=false,$isLink=false);
					$output['HEXTRAS']=jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS,$editable=false,$isLink=false);
					$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME,$editable=false,$isLink=false);

					$output['HMOREINFO']=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,$isLink=false);
					$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MYBOOKINGS',_JOMCOMP_MYUSER_MYBOOKINGS,$editable=false,$isLink=false);

					$counter=0;
					foreach ($contracts as $c)
						{
						$mrConfig=getPropertySpecificSettings($c->property_uid);
						$counter++;
						 if ($counter % 2)
							$r['STYLE'] ="odd";
						else
							$r['STYLE'] ="even";
						$currfmt = jomres_getSingleton('jomres_currency_format');
						$currency=$mrConfig['currency'];
						$r['PROPERTYNAME']=getPropertyNameNoTables($c->property_uid);
						$r['ARRIVAL']=outputDate($c->arrival);
						$r['DEPARTURE']=outputDate($c->departure);
						$r['lastchanged']=$c->timestamp;
						$r['EXTRASVALUE']=$currency.$currfmt->get_formatted($c->extrasvalue);
						$r['CONTRACT_TOTAL']=$currency.$currfmt->get_formatted($c->contract_total);
						$fileLocation=$jrConfig['ss_imageLocation'];
						if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.$fileLocation.$c->property_uid.'_property_'.$c->property_uid.'.jpg') )
							$r['IMAGE']='<img src="'.get_showtime('live_site').$fileLocation.$c->property_uid.'_property_'.$c->property_uid.'.jpg" width="40">';
						else
							$r['IMAGE']='&nbsp;';
						$r['VIEWLINK']=JOMRES_SITEPAGE_URL."&task=muviewbooking&contract_uid=".$c->contract_uid;
						$r['VIEWLINK_TEXT']=jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING,$editable=false,$isLink=true);
						$r['PROPERTYDETAILSLINK']=JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$c->property_uid;
						$rows[]=$r;
						}

					$pageoutput[]=$output;
					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->addRows( 'rows', $rows );
					$tmpl->readTemplatesFromInput( 'list_bookings.html' );
					$tmpl->displayParsedTemplate();
					}
				}
			else
				{
				echo jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE',_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE,$editable=false,$isLink=false);
				}
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output['HARRIVAL']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output['HDEPARTURE']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output['HTOTAL']=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$output['HEXTRAS']=jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS);
		$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME);
		$output['HMOREINFO']=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION);
		$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MYBOOKINGS',_JOMCOMP_MYUSER_MYBOOKINGS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>