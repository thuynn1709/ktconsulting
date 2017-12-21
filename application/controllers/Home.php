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
class Home extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/featuresitems_model');
        $this->load->model('admin/smallmenuitems_model');
    }

    public function index() {
        $this->_loadFrontendHeader('home');
        $this->load->view('frontend/home/index');
        $this->_loadFrontendCtaSection();
        $this->_loadFrontendOtherOfficeAddress();
        $this->_loadFrontendFooter();
    }

}
