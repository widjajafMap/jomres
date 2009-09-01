<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


//-----------------------------
//-A S S I G N  U S E R S  ----
//-----------------------------

/**
#
 * Lists profiles, performing assignation functionality where valid
#
 */
function listMosUsers()
	{
	$userList = jomres_cmsspecific_getCMSUsers();
	$userRowInfo="";
	$tickIcon	= '<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/Tick.png" border="0">';
	$crossIcon	= '<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/Cancel.png" border="0">';
	$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0">';
	
	$img_guest=get_showtime('live_site')."/jomres/images/Tourists.png";
	$img_reception=get_showtime('live_site')."/jomres/images/Services.png";
	$img_manager=get_showtime('live_site')."/jomres/images/User_Agent_Male.png";
	$img_superpropertymanager=get_showtime('live_site')."/jomres/images/User_Ninja.png";
	
	$rows=array();
	$output=array();

	$output['INSTRUCTIONS']=_JOMRES_PROFILELIST_INSTRUCTIONS;
	$output['HLINKTEXT']=	_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT;
	$output['HGRANTLINK']=	_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER;
	$output['HACCESSLEVEL']=_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL;
	$output['HUSERNAME']=_JOMRES_COM_MR_ASSIGNUSER_USERNAME;
	$output['HNUMBEROFPROPERTIES']='<img src="'.get_showtime('live_site').'/jomres/images/jomresimages/small/propertyTypes.png">';
	
	
	$output['KEY']='
	<img src = "'.$img_guest.'"  style="border:none;">'._JOMRES_COM_MR_EDITBOOKING_TAB_GUEST.'
	<img src = "'.$img_reception.'"  style="border:none;">'._JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION.'
	<img src = "'.$img_manager.'"  style="border:none;">'._JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN.'
	<img src = "'.$img_superpropertymanager.'"  style="border:none;">'._JOMRES_COM_USERIS_SUPERPROPERTYMANAGER.'
	';
	
	$img_output_guest='<img src = "'.$img_guest.'"  style="border:none;">';
	$img_output_reception='<img src = "'.$img_reception.'"  style="border:none;">';
	$img_output_manager='<img src = "'.$img_manager.'"  style="border:none;">';
	$img_output_superpropertymanager='<img src = "'.$img_superpropertymanager.'"  style="border:none;">';
	
	$managers=array();
	$query="SELECT manager_uid,userid,currentproperty,access_level,pu FROM #__jomres_managers";
	$jomresUserList  = doSelectSql($query);
	foreach ($jomresUserList as $user)
		{
		$managers[$user->userid]=array('manager_uid'=>$user->manager_uid,'userid'=>$user->userid,'access_level'=>$user->access_level,'pu'=>$user->pu);
		}
	foreach($userList as $user)
		{
		$r=array();
		$accesslevel_img =$img_output_guest;
		$authorise="y";
		$authorise_img=$crossIcon;
		if (count($managers)>0 )
			{
			$access_level=0;
			if (array_key_exists($user['id'],$managers) )
				{
				$authorise="n";
				$authorise_img=$tickIcon;
				foreach ($jomresUserList as $userdeets)
					{
					$access_level= $userdeets->access_level;
					$pu = $userdeets->pu;// Pu, flag that defines if a user is a super property manager.
					}
				if ($managers[$user['id']]['access_level']=="1")
					$accesslevel_img =$img_output_reception;
				else
					$accesslevel_img =$img_output_manager;
					
				if ($managers[$user['id']]['pu'] == "1")
					$accesslevel_img =$img_output_superpropertymanager;

				$query="SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE manager_id = '".(int)$user['id']."'";
				$propertyList= doSelectSql($query);
				$numberOfProperties=count($propertyList);
				}
 			}
		
		$r['ACCESSLEVELIMAGE']=$accesslevel_img;
		$r['GRANTLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=grantMosUser&userid='.$user['id'].'&grantAct='.$authorise.'">'.$authorise_img.'</a>';
		if ($access_level>0)
			$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editProfile&id='.$user['id'].'">'.$editIcon.'</a>';
		else
			$r['LINKTEXT']="&nbsp;";
		$r['USERNAME']=$user['username'];
		$r['NUMBEROFPROPERTIES']=$numberOfProperties;
		$rows[]=$r;
		}

	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
	$tmpl->readTemplatesFromInput( 'list_profiles.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->addRows( 'rows',$rows);
	$tmpl->displayParsedTemplate();
	}


function editProfile()
	{
	$userid = jomresGetParam( $_REQUEST, 'id', 0 );

	$yesno = array();
	$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
	$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
	
	$accessLevels = array();
	$accessLevels[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION );
	$accessLevels[] = jomresHTML::makeOption( '2', _JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN );
	
	$output['INSTRUCTIONS']=_JOMRES_PROFILEEDIT_INSTRUCTIONS;
	$output['HSUPERPROP']=_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER;
	$output['HACCESSLEVEL']=_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL;
	
	
	$query="SELECT access_level,pu FROM #__jomres_managers WHERE userid = ".$userid. " LIMIT 1";
	$managerDetails  = doSelectSql($query);
	foreach ($managerDetails as $m)
		{
		$accessLevel=$m->access_level;
		$superPropertyManager=$m->pu;
		}
	$superPropertyManagerOutput=jomresHTML::selectList( $yesno, 'superpropertymanager','class="inputbox" size="1"', 'value', 'text', $superPropertyManager);
	$accessLevelOutput=jomresHTML::selectList( $accessLevels, 'accesslevel','class="inputbox" size="1"', 'value', 'text', $accessLevel);
	$output['SUPERPROP']=$superPropertyManagerOutput;
	$output['ACCESSLEVEL']=$accessLevelOutput;
	$output['ID']=$userid;
	
	$query="SELECT manager_id,property_uid FROM #__jomres_managers_propertys_xref";
	$managersToPropertysList = doSelectSql($query);
	$managersToPropertysArray=array();
	foreach ($managersToPropertysList as $x)
		{
		$managersToPropertysArray[$x->property_uid][]=(int)$x->manager_id;
		}
	$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$userid."'";
	$managersToPropertyList = doSelectSql($query);
	$managersToPropertyArray=array();
	foreach ($managersToPropertyList as $x)
		{
		$managersToPropertyArray[]=(int)$x->property_uid;
		}
		
	$query="SELECT propertys_uid,property_name FROM #__jomres_propertys";
	$propertyList = doSelectSql($query);
	foreach ($propertyList as $property)
		{
		$propertyIdArray[$property->propertys_uid]=$property->propertys_uid;
		$propertynameArray[$property->propertys_uid]=$property->property_name;
		}
		
	$query="SELECT userid,username FROM #__jomres_managers";
	$managerList= doSelectSql($query);
	$managersArray=array();
	foreach ($managerList as $m)
		{
		$managersArray[$m->userid]=$m->username;
		}
	$n=count($propertyIdArray);
	foreach ($propertyIdArray as $i)
		{
		$r=array();
		$propertyManagers="";
		$managers=$managersToPropertysArray[$i];
		if (count($managers)>0)
			{
			foreach ($managers as $m)
				{
				$propertyManagers .= $managersArray[$m].", ";
				}
			$propertyManagers = substr( $propertyManagers , 0, -2 );
			}
		$row="0";
		if ($i % 2)
			$row="1";
		$checked="";
		if (in_array($propertyIdArray[$i] ,$managersToPropertyArray) )
			$checked="checked";
		$r['INPUT']="<input type=\"checkbox\" name=\"chosenHotel[]\" value=\"".$propertyIdArray[$i]."\" ".$checked.">";
		$r['PROPERTYNAME']=$propertynameArray[$i];
		$r['MANAGERS']=$propertyManagers;
		$rows[]=$r;
		}

	$jrtbar =jomres_getSingleton('jomres_toolbar');
	$jrtb  = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
	$link = get_showtime('live_site')."/".JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
	$jrtb .= $jrtbar->customToolbarItem('saveProfile',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="saveProfile",$image);
	$jrtb .= $jrtbar->toolbarItem('cancel',"index2.php?option=com_jomres&task=listMosUsers",'');
	$jrtb .= $jrtbar->endTable();
	$output['JOMRESTOOLBAR']=$jrtb;
	
	$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
	
	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
	$tmpl->readTemplatesFromInput( 'edit_profile.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->addRows( 'rows',$rows);
	$tmpl->displayParsedTemplate();
	}

	
function saveProfile()
	{
	$userid 				= jomresGetParam( $_POST, 'userid', 0 );
	$superpropertymanager 	= jomresGetParam( $_POST, 'superpropertymanager', 0 );
	$accesslevel 			= jomresGetParam( $_POST, 'accesslevel', 0 );
	$chosenHotels 			= jomresGetParam( $_POST, 'chosenHotel', array() );
	if (count($chosenHotels)==0 && $superpropertymanager == 0)
		{
		echo "Error, you need to assign at least one property to this user";
		return;
		}
	updateManagerIdToPropertyXrefTable($userid,$chosenHotels);
	$acsLvlStr="";
	if ($accesslevel == 1)
		{
		$acsLvlStr=", pu='0'";
		$query = "UPDATE #__jomres_managers SET `access_level` = '$accesslevel' ".$acsLvlStr." WHERE userid = '".(int)$userid."'";
		}
	else
		{
		$acsLvlStr=", pu='".$superpropertymanager."'";
		$query = "UPDATE #__jomres_managers SET `access_level` = '$accesslevel' ".$acsLvlStr." WHERE userid = '".(int)$userid."'";
		}
	if (doInsertSql($query,'Changed access level to '.$accesslevel))
		{
		// If this is a super property manager, then we can grab all the property uids, return the first one and set the default property as that property uid. If we don't, the user will bomb out on login
		if ($superpropertymanager == 1)
			{
			$query="SELECT propertys_uid,property_name FROM #__jomres_propertys LIMIT 1";
			$property_uid = doSelectSql($query,1);
			$query="UPDATE #__jomres_managers SET `currentproperty`='$property_uid' WHERE userid = '".$userid."'";
			if (!doInsertSql($query,FALSE)) trigger_error ("Unable to set current property, mysql db failure", E_USER_ERROR);
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listMosUsers",_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE );
			}
		jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listMosUsers",_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE );
		}
		
	
	}

/**
#
 * Grants or removes a user's access to the system
#
 */
function grantMosUser()
	{
	$userid = (int)jomresGetParam( $_GET, 'userid', 0 );
	$grantAct = jomresGetParam( $_GET, 'grantAct', '' );
	if ($userid>0)
		{
		$userList = jomres_cmsspecific_getCMSUsers();

		foreach ($userList as $u)
			{
			if ($u['id'] == $userid)
				$username=$u['username'];
			}
		$apikey=createNewAPIKey();
		if ($grantAct=="y")
			$query="INSERT INTO #__jomres_managers (`userid`,`username`,`property_uid`,`access_level`,`currentproperty`,`apikey`)VALUES ('".(int)$userid."','$username','-1','1','-1','$apikey')";
		else
			$query="DELETE FROM #__jomres_managers WHERE userid = '".(int)$userid."'";
		if (doInsertSql($query,'') )
			{
			if ($grantAct=="y")
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=editProfile&id=".(int)$userid,_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE );
			else
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listMosUsers",_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE );
			}
		}
	else
		echo "Hmm, that userid is 0";
	}

?>