<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array validateLogin($email, $password)
 * @method static array getClients($start = 0, $limit = 25, $search = null)
 * @method static array getClientDetails($client_id, $stats = false)
 * @method static array getClientDomains($client_id, $start = 0, $limit = 25)
 * @method static array getClientProducts($client_id, $start = 0, $limit = 25)
 * @method static array createClient($params)
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSClient
 * @see \WHMCS\Facades\WHMCSClient
 */
class WHMCSClient extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsc'; }
}