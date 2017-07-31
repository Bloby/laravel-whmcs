<?php

namespace WHMCS;

class WHMCSModule extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Run the module create command
     *
     * Parameters:
     *
     * accountid - the unique id number of the account in the tblhosting table
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Module_Create
     */

    public function create($params = []) {
        $params['action'] = 'ModuleCreate';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Run the module suspend command
     *
     * Parameters:
     *
     * accountid - the unique id number of the account in the tblhosting table
     * suspendreason - an explanation of why the suspension has been made shown to clients & staff
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Module_Suspend
     */

    public function suspend($params = []) {
        $params['action'] = 'ModuleSuspend';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Run the module unsuspend command
     *
     * Parameters:
     *
     * accountid - the unique id number of the account in the tblhosting table
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Module_Unsuspend
     */

    public function unsuspend($params = []) {
        $params['action'] = 'ModuleUnsuspend';
        return $this->submitRequest($params);
    }

    // --------------------------------------------------------------------

    /**
     * Run the module terminate command
     *
     * Parameters:
     *
     * accountid - the unique id number of the account in the tblhosting table
     *
     * @param array $params
     * @return array
     *
     * @see: http://wiki.whmcs.com/API:Module_Terminate
     */

    public function terminate($params = []) {
        $params['action'] = 'ModuleTerminate';
        return $this->submitRequest($params);
    }
    
}