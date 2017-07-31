<?php

namespace WHMCS;

class WHMCSQuote extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Create a new quote
     *
     * Parameters:
     *
     * userid - the unique id number of the client in the tblclients table
     * firstname - optional - only required if userid is not specified
     * lastname - optional - only required if userid is not specified
     * companyname - optional - only required if userid is not specified
     * email - optional - only required if userid is not specified
     * address1 - optional - only required if userid is not specified
     * address2 - optional - only required if userid is not specified
     * city - optional - only required if userid is not specified
     * state - optional - only required if userid is not specified
     * postcode - optional - only required if userid is not specified
     * country - optional - only required if userid is not specified
     * phonenumber - optional - only required if userid is not specified
     * currency - optional - only required if userid is not specified
     * subject - Subject of the quote
     * stage - Draft,Delivered,On Hold,Accepted,Lost,Dead
     * validuntil - In format set in Localisation
     * datecreated - Optional - In format set in Localisation
     * customernotes - notes that are viewable by the client
     * adminnotes - notes that are admin only
     * lineitems - a base64 encoded serialized array containing:
     * desc - The line description
     * qty - The quantity being quoted
     * up - unit price
     * discount - discount amount in %
     * taxable - true or false
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Create_Quote
     */
    public function createQuote($params = []) {
        $params['action'] = 'CreateQuote';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Update an existing quote
     *
     * Parameters:
     *
     * quoteid - the id number of the quote in tblquotes
     * userid - the unique id number of the client in the tblclients table
     * firstname - optional - only required if userid is not specified
     * lastname - optional - only required if userid is not specified
     * companyname - optional - only required if userid is not specified
     * email - optional - only required if userid is not specified
     * address1 - optional - only required if userid is not specified
     * address2 - optional - only required if userid is not specified
     * city - optional - only required if userid is not specified
     * state - optional - only required if userid is not specified
     * postcode - optional - only required if userid is not specified
     * country - optional - only required if userid is not specified
     * phonenumber - optional - only required if userid is not specified
     * currency - optional - only required if userid is not specified
     * subject - Subject of the quote
     * stage - Draft,Delivered,On Hold,Accepted,Lost,Dead
     * validuntil - In format set in Localisation
     * datecreated - Optional - In format set in Localisation
     * customernotes - notes that are viewable by the client
     * adminnotes - notes that are admin only
     * lineitems - a base64 encoded serialized array containing:
     * id - existing lineid only required to update existing lines
     * desc - The line description
     * qty - The quantity being quoted
     * up - unit price
     * discount - discount amount in %
     * taxable - true or false
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Update_Quote
     */
    public function updateQuote($params = []) {
        $params['action'] = 'UpdateQuote';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Delete a quote
     *
     * Parameters:
     *
     * quoteid - the id number of the quote in tblquotes
     *
     * See:
     *
     * http://wiki.whmcs.com/API:Delete_Quote
     */

    /*public function delete_quote($params = []) {
        $params['action'] = 'deletequote';
        return $this->submitRequest($params);
    }*/

    // --------------------------------------------------------------------

    /**
     * Send a quote to client
     *
     * Parameters:
     *
     * quoteid - the id number of the quote in tblquotes
     *
     * @param int $quoteid
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Send_Quote
     */
    public function sendQuote($quoteid) {
        $params = [
            'action' => 'SendQuote',
            'quoteid' => $quoteid,
        ];
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Accept a quote
     *
     * Parameters:
     *
     * quoteid - the id number of the quote in tblquotes
     *
     * @param int $quoteid
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Accept_Quote
     */
    public function acceptQuote($quoteid) {
        $params = [
            'action' => 'AcceptQuote',
            'quoteid' => $quoteid,
        ];
        return $this->submitRequest($params);
    }
    
}