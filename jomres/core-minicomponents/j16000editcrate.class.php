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

class j16000editcrate
	{
	function j16000editcrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$id = jomresGetParam( $_REQUEST, 'id',	0 );

		$output['PAGETITLE']=_JRPORTAL_CPANEL_PATETITLE;
		$output['HTITLE']=_JRPORTAL_CRATE_TITLE;
		$output['HTYPE']=_JRPORTAL_CRATE_TYPE;
		$output['HVALUE']=_JRPORTAL_CRATE_VALUE;
		$output['HCURRENCYCODE']=_JRPORTAL_CRATE_CURRENCYCODE;

		jr_import('jrportal_crate');
		$crateObj=new jrportal_crate();
		$crateObj->id=$id;
		if ($id>0)
			$crateObj->getCrate();

		jr_import('crateTypes');
		$crateType = new crateTypes();
		$crateType->id=$crateObj->type;
		$output['ID']=$crateObj->id;
		$output['TITLE']=$crateObj->title;
		$crateType->id=$crateObj->type;
		$dd=$crateType->makeCrateTypeDropdown();
		$output['TYPE']=$dd;
		$output['VALUE']=$crateObj->value;
		jr_import('currency_codes');
		$currency_codes = new currency_codes();
		$currency_codes->id=$crateObj->currencycode;
		$dd=$currency_codes->makeCodesDropdown();
		$output['CURRENCYCODE']=$dd;

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('saveCrate',$link,$text="Save",$submitOnClick=true,$submitTask="savecrate",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listcrates",_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_crate.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}