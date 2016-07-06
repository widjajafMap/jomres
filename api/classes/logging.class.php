<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogHandler;
use Monolog\Formatter\LineFormatter;

class logging 
	{
	public function __construct()
		{
		}

	public static function log_message ( $message  , $channel = "api" , $level = "DEBUG" )
		{
		$username = "Unknown";
		if (!defined('JOMRESCONFIG_ABSOLUTE_PATH')) // For performance reasons the API doesn't include the rest of the framework unless called in an API Feature. As a result, we'll check here to see if a core system path is set. If it's not, we'll call configuration.php directly instead of using the framework to include it
			{
			include( '../configuration.php');
			}
		else
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
			$user = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( $thisJRUser->id );
			if (count($user) > 0 )
				$username =  $user[$thisJRUser->id];
			}

		if ( !isset($jrConfig['log_path']) || $jrConfig['log_path'] == '' )
			$jrConfig['log_path'] = dirname(dirname(dirname(__FILE__)) ).'/temp/monolog/';
		
		$log_file = "application.log";

		$formatter = new LineFormatter( "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n" );
		
		$logger = new Logger($channel);
		$logger->pushProcessor(new \Monolog\Processor\WebProcessor);
		$logger->pushHandler(new StreamHandler($jrConfig['log_path'].$log_file, Logger::DEBUG));

		$syslogHandler = new SyslogHandler(
			'jomres', 'local0', Logger::INFO
		);

		$syslogHandler->setFormatter($formatter);

		$logger->pushHandler($syslogHandler);
		$logger->pushProcessor(function ($record) {
			$record['extra']['transaction_id'] = TRANSACTION_ID; // Transaction id is used to identify the caller ( microtime ) so that we can associate logs with actions
			return $record;
			});
		
		$context = array ( "username"=>$username );
		
		switch ( $level )
			{
			default:
			case 'DEBUG':
				$logger->addDebug($message , $context ); // Detailed debug information.
				break;
			case 'INFO':
				$logger->addInfo($message , $context ); // Interesting events. Examples: User logs in, SQL logs.
				break;
			case 'NOTICE':
				$logger->addNotice($message , $context ); // Normal but significant events.
				break;
			case 'WARNING':
				$logger->addWarning($message , $context ); // Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
				break;
			case 'ERROR':
				$logger->addError($message , $context ); // Runtime errors that do not require immediate action but should typically be logged and monitored.
				break;
			case 'CRITICAL':
				$logger->addCritical($message , $context ); // Critical conditions. Example: Application component unavailable, unexpected exception.
				break;
			case 'ALERT':
				$logger->addAlert($message , $context ); // Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
				break;
			case 'EMERGENCY':
				$logger->addEmergency($message , $context ); //Emergency: system is unusable.
				break;
			}
		}
	}