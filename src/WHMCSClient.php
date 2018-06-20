<?php

namespace WHMCS;

class WHMCSClient extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $email
     * @param $password
     * @return array
     */
    public function validateLogin($email, $password)
    {
        $params = [
            'action'    => 'ValidateLogin',
            'email'     => $email,
            'password2' => $password,
        ];

        return $this->submitRequest($params);
    }

    /**
     * Return a list of all clients
     * 
     * @param int $start
     * @param int $limit
     * @param string $search
     * @return array
     */
    public function getClients($start = 0, $limit = 25, $search = null)
    {
        $params = [
            'action'        => 'GetClients',
            'limitstart'    => $start,
            'limitnum'      => $limit,
        ];

        if ($search) {
            $params['search'] = $search;
        }
        
        return $this->submitRequest($params);
    }

    /**
     * Returns the specified client's data
     * 
     * @param string|int $client_id
     * @param bool $stats
     * @return array
     */
    public function getClientDetails($client_id, $stats = false)
    {
        $params = [
            'action'    =>  'GetClientsDetails',
            'clientid'  =>  $client_id,
            'stats'     =>  $stats
        ];

        return $this->submitRequest($params);
    }

    /**
     * Returns the specified client's domains
     * 
     * @param string|int $client_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClientDomains($client_id, $start = 0, $limit = 25)
    {
        $params = [
            'action'        =>  'GetClientsDomains',
            'clientid'      =>  $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($params);
    }

    /**
     * Return a list of a client's products
     * 
     * @param int $client_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClientProducts($client_id, $start = 0, $limit = 25)
    {
        $params = [
            'action'        => 'GetClientsProducts',
            'clientid'      => $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($params);
    }

    /**
     * Obtain an array of client groups
     *
     * @return array
     */
    public function getClientGroups()
    {
        $params = [
            'action'        => 'GetClientGroups',
        ];

        return $this->submitRequest($params);
    }

    /**
     * Creates a new client
     * 
     * @param array $params
     * @return array
     */
    public function createClient($params)
    {
        $params['action'] = 'AddClient';

        return $this->submitRequest($params);
    }

}