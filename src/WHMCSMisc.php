<?php

namespace WHMCS;

class WHMCSMisc extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Perform a whois lookup for a domain name
     *
     * Parameters:
     *
     * domain - the domain to check
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Domain_WHOIS
     */

    public function domainWhois($params = []) {
        $params['action'] = 'DomainWhois';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get activity log
     *
     * Parameters:
     *
     * limitstart - Which User ID to start at (default = 0)
     * limitnum - Limit by number (default = 25)
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Activity_Log
     */

    public function getActivityLog($params = []) {
        $params['action'] = 'GetActivityLog';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get administrator details
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Admin_Details
     */

    public function getAdminDetails() {
        return $this->submitRequest([
            'action' => 'GetAdminDetails'
        ]);
    }

    // --------------------------------------------------------------------

    /**
     * Update administrator notes
     *
     * Parameters:
     *
     * notes - notes to enter
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Update_Admin_Notes
     */

    public function updateAdminNotes($params = []) {
        $params['action'] = 'UpdateAdminNotes';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get allowed currencies
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Currencies
     */

    public function getCurrencies() {
        return $this->submitRequest([
            'action' => 'GetCurrencies'
        ]);
    }

    // --------------------------------------------------------------------

    /**
     * Get promotions
     *
     * Note: WHMCS has this listed under Misc as well as invoices. It's
     * aliased here for consistancy with their API docs
     *
     * Parameters:
     *
     * code - the specific promotion code to return information for (optional)
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Promotions
     */

    public function getPromotions($params = []) {
        $params['action'] = 'GetPromotions';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get email templates
     *
     * Parameters:
     *
     * type - optional - from product,domain,support,general,invoice,affiliate
     * language - optional - only required for additional languages
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Email_Templates
     */

    public function getEmailTemplates($params = []) {
        $params['action'] = 'GetEmailTemplates';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get todo items
     *
     * Parameters:
     *
     * status - optional - from New,Pending,In Progress,Completed,Postponed
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_To-Do_Items
     */

    public function getToDoList($params = []) {
        $params['action'] = 'GetToDoList';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get configured todo item statuses
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_To-Do_Items_Statuses
     */

    public function getToDoItemStatuses() {
        return $this->submitRequest([
            'action' => 'GetToDoItemStatuses'
        ]);
    }

    // --------------------------------------------------------------------

    /**
     * Get staff online
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Staff_Online
     */

    public function getStaffOnline() {
        return $this->submitRequest([
            'action' => 'GetStaffOnline'
        ]);
    }

    // --------------------------------------------------------------------

    /**
     * Get stats
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Stats
     */

    public function getStats() {
        return $this->submitRequest([
            'action' => 'GetStats'
        ]);
    }

    // --------------------------------------------------------------------

    /**
     * Encrypt a password with the WHMCS algorithm
     *
     * Parameters:
     *
     * password2 - should contain the string you want encrypting
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Encrypt_Password
     */

    public function encryptPassword($params = []) {
        $params['action'] = 'EncryptPassword';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Decrypt a string with the WHMCS algorithm
     *
     * NOTE: This cannot be used to decrypt the clients password.
     *
     * Parameters:
     *
     * password2 - should contain the string you want decrypting
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Decrypt_Password
     */

    public function decryptPassword($params = []) {
        $params['action'] = 'DecryptPassword';
        return $this->submitRequest($params);
    }
    
}