<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array domainWhois($params = [])
 * @method static array getActivityLog($params = [])
 * @method static array getAdminDetails()
 * @method static array updateAdminNotes($params = [])
 * @method static array getCurrencies()
 * @method static array getPromotions($params = [])
 * @method static array getEmailTemplates($params = [])
 * @method static array getToDoList($params = [])
 * @method static array getToDoItemStatuses()
 * @method static array getStaffOnline()
 * @method static array getStats()
 * @method static array encryptPassword($params = [])
 * @method static array decryptPassword($params = [])
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSMisc
 * @see \WHMCS\Facades\WHMCSMisc
 */
class WHMCSMisc extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsm'; }
}