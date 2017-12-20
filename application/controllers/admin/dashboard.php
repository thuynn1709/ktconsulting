<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author Nguyen Ruy
 */

class Dashboard extends MY_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        if (! $this->is_logged_in_admin()) {
            redirect(base_url('admin/login/login')); 
        }
    }
    
    public function index() {
        $this->_loadAdminHeader();
        $this->load->view('admin/dashboard/index');
        $this->_loadAdminFooter();
    }
}
