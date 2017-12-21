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
class About extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'cookie'));
        $this->load->library(array('form_validation', 'session'));
    }

    public function index() {
        $this->_loadFrontendHeader('about');
        $this->load->view('frontend/about/index');
        $this->_loadFrontendFooter();
    }

}
