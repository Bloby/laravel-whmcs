<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array createQuote($params = [])
 * @method static array updateQuote($params = [])
 * @method static array sendQuote($quoteid)
 * @method static array acceptQuote($quoteid)
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSQuote
 * @see \WHMCS\Facades\WHMCSQuote
 */
class WHMCSQuote extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsq'; }
}