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
<<<<<<< HEAD
        $this->load->model('Fslidebar_Model');
=======
        $this->load->model('slidebarfront_model');
      
>>>>>>> e272040afc2b0b4f8d6e575ac5ed8d7f89ec150c
    }

    public function index() {
        $this->_loadFrontendHeader('home');
        $data = array();
<<<<<<< HEAD
        $data['slidebar'] = $this->Fslidebar_Model->get_all();
=======
        $data['slidebar'] = $this->slidebarfront_model->get_all();
>>>>>>> e272040afc2b0b4f8d6e575ac5ed8d7f89ec150c
        $this->load->view('frontend/home/index', $data);
        $this->_loadFrontendCtaSection();
        //$this->_loadFrontendOtherOfficeAddress();
        $this->_loadFrontendFooter();
    }

}
