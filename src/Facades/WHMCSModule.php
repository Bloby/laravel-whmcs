<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array create($params = [])
 * @method static array suspend($params = [])
 * @method static array unsuspend($params = [])
 * @method static array terminate($params = [])
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSModule
 * @see \WHMCS\Facades\WHMCSModule
 */
class WHMCSModule extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsmod'; }
}