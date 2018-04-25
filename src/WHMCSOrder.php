<?php

namespace WHMCS;

class WHMCSOrder extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Create a new order
     *
     * Parameters:
     *
     * clientid - client id for order
     * pid - product id
     * domain - domain name
     * billingcycle - onetime, monthly, quarterly, semiannually, etc..
     * addons - comma seperated list of addon ids
     * customfields - a base64 encoded serialized array of custom field values
     * configoptions - a base64 encoded serialized array of configurable product options
     * domaintype - set for domain registration - register or transfer
     * regperiod - 1,2,3,etc...
     * dnsmanagement - true to enable
     * emailforwarding - true to enable
     * idprotection - true to enable
     * eppcode - if transfer
     * nameserver1 - first nameserver (req for domain reg only)
     * nameserver2 - second nameserver
     * nameserver3 - third nameserver
     * nameserver4 - fourth nameserver
     * paymentmethod - paypal, authorize, etc...
     * promocode - pass coupon code to apply to the order (optional)
     * affid - affiliate ID if you want to assign the order to an affiliate (optional)
     * noinvoice - set true to not generate an invoice for this order
     * noemail - set true to surpress the order confirmation email
     * clientip - can be used to pass the customers IP (optional)
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Add_Order
     */

    public function addOrder($params = []) {
        $params['action'] = 'AddOrder';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get orders
     *
     * Parameters:
     *
     * limitstart - The record number to start at (default = 0)
     * limitnum - The number of order records to return (default = 25)
     *
     * @param int $limitstart
     * @param int $limitnum
     * @param int $id
     * @param int $userid
     * @param string $status
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Orders
     */

    public function getOrders($limitstart = 0, $limitnum = 25, $id = null, $userid = null, $status = null) {
        $params = [
            'action' => 'GetOrders',
            'limitstart' => $limitstart,
            'limitnum' => $limitnum,
        ];
        if (null !== $id) {
            $params['id'] = $id;
        }
        if (null !== $userid) {
            $params['userid'] = $userid;
        }
        if (null !== $status) {
            $params['status'] = $status;
        }
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get products
     *
     * Parameters:
     *
     * pid - can be used to just retrieve the details of a specific product ID
     * gid - can be passed to just retrieve products in a specific group
     * module - can be passed to just retrieve products assigned to a specific module
     *
     * @param int $pid
     * @param int $gid
     * @param string $module
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Products
     */

    public function getProducts($pid, $gid = null, $module = null) {
        $params = [];
        $params['action'] = 'GetProducts';
        $params['pid'] = $pid;
        if ($gid !== null) {
            $params['gid'] = $gid;
        }
        if ($module !== null) {
            $params['module'] = $module;
        }
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get promotions
     *
     * Parameters:
     *
     * code - the specific promotion code to return information for (optional)
     *
     * @param array $code
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Promotions
     */

    public function getPromotions($code = null) {
        $params = [];
        $params['action'] = 'GetPromotions';
        if ($code !== null) {
            $params['code'] = $code;
        }
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Get order statuses
     *
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Get_Order_Statuses
     */

    public function getOrderStatuses() {
        $params['action'] = 'GetOrderStatuses';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Accept an order
     *
     * Parameters:
     *
     * orderid - the Order ID
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Accept_Order
     */

    public function acceptOrder($params = []) {
        $params['action'] = 'AcceptOrder';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Place an order in pending
     *
     * Parameters:
     *
     * orderid - the Order ID
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Pending_Order
     */

    public function pendingOrder($params = []) {
        $params['action'] = 'PendingOrder';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Cancel an order
     *
     * Parameters:
     *
     * orderid - the Order ID
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Cancel_Order
     */

    public function cancelOrder($params = []) {
        $params['action'] = 'CancelOrder';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Mark an order as fraud
     *
     * Parameters:
     *
     * orderid - the Order ID
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Fraud_Order
     */

    public function fraudOrder($params = []) {
        $params['action'] = 'FraudOrder';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Delete an order
     *
     * Parameters:
     *
     * orderid - the Order ID
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Delete_Order
     */

    public function deleteOrder($params = []) {
        $params['action'] = 'DeleteOrder';
        return $this->submitRequest($params);
    }
    
}