<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getInvoices($params = [])
 * @method static array getInvoice($params = [])
 * @method static array createInvoice($params = [])
 * @method static array updateInvoice($params = [])
 * @method static array addInvoicePayment($params = [])
 * @method static array capturePayment($params = [])
 * @method static array addBillableItem($params = [])
 * @method static array addCredit($params = [])
 * @method static array addTransaction($params = [])
 * @method static array getPaymentMethods()
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSInvoice
 * @see \WHMCS\Facades\WHMCSInvoice
 */
class WHMCSInvoice extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcsi'; }
}