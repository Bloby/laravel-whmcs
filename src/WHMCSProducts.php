<?php

namespace WHMCS;

class WHMCSProducts extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Adds a product to the system to be available for purchase
     *
     * name - string - The name of the product to be added Required
     * gid - int - The id of the product group to add the product Required
     * type - string - One of ‘hostingaccount’, ‘reselleraccount’, ‘server’ or ‘other’ Optional
     * stockcontrol - bool - Set to true to enable stock control on the product Optional
     * qty - int - How much of this product is in stock Optional
     * paytype - string - The payment type of the product. One of ‘free’, ‘onetime’, ‘recurring’ Optional
     * hidden - bool - Should the product be hidden from the client order form Optional
     * showdomainoptions - bool - Should the product show the domain registration options. Optional
     * tax - bool - Does tax apply to the product. Optional
     * isFeatured - bool - Should the product be featured in the Product Group. Optional
     * proratabilling - bool - Is pro-rata billing enabled for this product. Optional
     * description - string - The description of the product to show on the product listing in the cart Optional
     * welcomeemail - int - The id of the Email Template to use as the welcome email. Product/Service Messages only Optional
     * proratadate - int - See http://docs.whmcs.com/Products_and_Services#Pricing_Tab Optional
     * proratachargenextmonth - int - See http://docs.whmcs.com/Products_and_Services#Pricing_Tab Optional
     * subdomain - string - A comma separated list of subdomains to offer on the domain register page. eg: .domain1.com,.domain2.com Optional
     * autosetup - string - When should the product be automatically setup. One of “ (never), ‘on’ (pending order), ‘payment’ (on payment), ‘order’ (on order) Optional
     * module - string - The server module system name to associate with the product. eg: cpanel, autorelease, plesk Optional
     * servergroupid - int - The server group id used on product creation to associate an appropriate server Optional
     * configoption1 - mixed - The first module configuration value Optional
     * configoption2 - mixed - The second module configuration value Optional
     * configoption3 - mixed - The third module configuration value Optional
     * configoption4 - mixed - The fourth module configuration value Optional
     * configoption5 - mixed - The fifth module configuration value Optional
     * configoption6 - mixed - The sixth module configuration value Optional
     * order - int - The order to in which to display on the order form Optional
     * pricing - array - The pricing array to associate with the product. format $pricing[currencyid]cycle Optional
     *
     * @param array $params
     * @return array
     */
    public function addProduct($params = []) {
        $params['action'] = 'AddProduct';
        return $this->submitRequest($params);
    }

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

    /**
     * Upgrade, or calculate an upgrade on, a product
     *
     * serviceid - int - The ID of the service to update Required
     * calconly - bool - Only calculate the upgrade amount Optional
     * paymentmethod - string - The upgrade payment method in system format (e.g. paypal) Required
     * type - string - The type of upgrade (‘product’, ‘configoptions’) Required
     * newproductid - int - The Id of the new product Optional
     * newproductbillingcycle - string - The new products billing cycle Optional
     * promocode - string - The promotion code to apply to the upgrade Optional
     * configoptions - array - An array of config options to upgrade Optional
     * configoptions[id] - int - The id of the config option Optional
     * configoptions[optiontype] - int - The config option type Optional
     * configoptions[selectedvalue] - int - The config option selected value Optional
     * configoptions[selectedqty] - int - The config option quantity selected Optional
     *
     * @param array $params
     * @return array
     */
    public function upgradeProduct($params = []) {
        $params['action'] = 'UpgradeProduct';
        return $this->submitRequest($params);
    }
    
}