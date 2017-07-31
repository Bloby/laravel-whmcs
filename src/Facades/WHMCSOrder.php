<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array addOrder($params = [])
 * @method static array getOrders($limitstart = 0, $limitnum = 25)
 * @method static array getProducts($pid, $gid = null, $module = null)
 * @method static array getPromotions($code = null)
 * @method static array getOrderStatuses()
 * @method static array acceptOrder($params = [])
 * @method static array pendingOrder($params = [])
 * @method static array cancelOrder($params = [])
 * @method static array fraudOrder($params = [])
 * @method static array deleteOrder($params = [])
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSOrder
 * @see \WHMCS\Facades\WHMCSOrder
 */
class WHMCSOrder extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcso'; }
}