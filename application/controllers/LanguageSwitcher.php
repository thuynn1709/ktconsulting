<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageSwitcher
 *
 * @author Nguyen Ruy
 */
class LanguageSwitcher extends MY_Controller {
    public function __construct() {
        parent::__construct();   
        $this->load->helper(array('form', 'url', 'cookie'));
        $this->load->library(array('form_validation','session'));
    }
 
    function switchLang($language = "") {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        redirect($_SERVER['HTTP_REFERER']);
        
    }
}
