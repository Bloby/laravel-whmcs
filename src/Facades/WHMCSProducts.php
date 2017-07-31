<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getProducts($pid, $gid = null, $module = null)
 * @method static array addProduct($params = [])
 * @method static array upgradeProduct($params = [])
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSProducts
 * @see \WHMCS\Facades\WHMCSProducts
 */
class WHMCSProducts extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsp'; }
}