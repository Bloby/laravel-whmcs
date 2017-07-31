<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array openTicket($params = [])
 * @method static array addTicketReply($params = [])
 * @method static array getTickets($params = [])
 * @method static array getTicket($params = [])
 * @method static array updateTicket($params = [])
 * @method static array addTicketNote($params = [])
 * @method static array delete_ticket($ticketid)
 * @method static array getSupportDepartments($params = [])
 * @method static array getSupportStatuses($params = [])
 * @method static array get_ticket_predefined_cats()
 * @method static array getTicketPredefinedReplies($params = [])
 * @method static array executeCommand($command, $params = [])
 *
 * @see \WHMCS\WhmcsCore
 * @see \WHMCS\WHMCSTicket
 * @see \WHMCS\Facades\WHMCSTicket
 */
class WHMCSTicket extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcst'; }
}