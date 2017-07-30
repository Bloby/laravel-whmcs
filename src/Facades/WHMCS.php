<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array validateLogin($email, $password)
 * @method static array getClients($start = 0, $limit = 25, $search = null)
 * @method static array getClientDetails($client_id, $stats = false)
 * @method static array getClientDomains($client_id, $start = 0, $limit = 25)
 * @method static array getClientProducts($client_id, $start = 0, $limit = 25)
 * @method static array createClient($data)
 * @method static array executeCommand($command, $data)
 *
 * @see \WHMCS\WHMCS
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\Facades\WHMCS
 */
class WHMCS extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcs'; }
}