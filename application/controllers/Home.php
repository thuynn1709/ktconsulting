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
        $this->load->model('Fslidebar_Model');
    }

    public function index() {
        $this->_loadFrontendHeader('home');
        $data = array();
        $data['slidebar'] = $this->Fslidebar_Model->get_all();
        $this->load->view('frontend/home/index', $data);
        $this->_loadFrontendCtaSection();
        //$this->_loadFrontendOtherOfficeAddress();
        $this->_loadFrontendFooter();
    }

}
