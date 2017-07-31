<?php

namespace WHMCS;

class WHMCSTicket extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Open a new ticket
     *
     * Parameters:
     *
     * clientid - the ID of the client the ticket belongs to
     * name - only required if not a registered client (clientid must be sent as 0)
     * email - only required if not a registered client
     * deptid - the ID of the ticket department
     * subject
     * message
     * priority - can be "Low", "Medium" or "High"
     * serviceid - the ID if the ticket relates to a specific product
     * customfields - a base 64 serialized array of field IDs => values
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Open_Ticket
     */
    public function openTicket($params = []) {
        $params['action'] = 'OpenTicket';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Reply to ticket
     *
     * Parameters:
     *
     * ticketid - the ID of the ticket to add the reply to
     * clientid - if adding reply as a client
     * name - only required if not a registered client (clientid must be sent as 0)
     * email - only required if not a registered client
     * adminusername - if adding reply as an admin, name to show
     * message
     * status - specify if you want to set the status to On Hold or In Progress after reply
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Reply_Ticket
     */
    public function addTicketReply($params = []) {
        $params['action'] = 'AddTicketReply';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get tickets
     *
     * Parameters:
     *
     * limitstart - Optional start at which result (default 0)
     * limitnum - Optional limit at how many results (default 25)
     * clientid - Optional search for a particular client's tickets
     * deptid - Optional search in a particular department
     * status - Optional search a particular status
     * subject - Optional search for a word in the subject
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Tickets
     */
    public function getTickets($params = []) {
        $params['action'] = 'GetTickets';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get a ticket
     *
     * Parameters:
     *
     * ticketid - Ticket id to retrieve
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Ticket
     */
    public function getTicket($params = []) {
        $params['action'] = 'GetTicket';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Update an existing ticket
     *
     * Parameters:
     *
     * ticketid - Ticket ID to be updated
     * subject
     * priority - Low, Medium or High
     * status - Open, Answered, Closed, etc...
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Update_Ticket
     */
    public function updateTicket($params = []) {
        $params['action'] = 'UpdateTicket';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Add a note to an existing ticket
     *
     * Parameters:
     *
     * ticketid - Ticket ID the note is to be added
     * message - The not to add
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Add_Ticket_Note
     */
    public function addTicketNote($params = []) {
        $params['action'] = 'AddTicketNote';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Delete an existing ticket
     *
     * Parameters:
     *
     * ticketid - Ticket ID to be deleted
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Delete_Ticket
     */
    public function delete_ticket($ticketid) {
        $params = [
            'action' => 'DeleteTicket',
            'ticketid' => $ticketid
        ];
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get support departments
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Support_Departments
     */
    public function getSupportDepartments($params = []) {
        $params['action'] = 'GetSupportDepartments';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get support statuses
     *
     * Parameters:
     *
     * deptid - Optional - Send a Department ID to limit results
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Support_Statuses
     */
    public function getSupportStatuses($params = []) {
        $params['action'] = 'GetSupportStatuses';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get ticket predefined categories
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Ticket_Predefined_Cats
     */
    public function get_ticket_predefined_cats() {
        return $this->submitRequest(['action' => 'GetTicketPredefinedCats']);
    }

    // --------------------------------------------------------------------

    /**
     * Get ticket predefined replies
     *
     * Parameters:
     *
     * catid - Optional Select category to browse
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Ticket_Predefined_Replies
     */
    public function getTicketPredefinedReplies($params = []) {
        $params['action'] = 'GetTicketPredefinedReplies';
        return $this->submitRequest($params);
    }
    
}