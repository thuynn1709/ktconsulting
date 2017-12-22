<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageLoader
 *
 * @author Nguyen Ruy
 */
class LanguageLoader {

    function initialize() {
        $ci = & get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
       
        if ($siteLang) {
            $ci->lang->load('home', $siteLang);
            $ci->lang->load('service', $siteLang);
            $ci->lang->load('about', $siteLang);
            $ci->lang->load('error', $siteLang);
            $ci->lang->load('blog', $siteLang);
            $ci->lang->load('message', $siteLang);
            $ci->lang->load('header', $siteLang);
            $ci->lang->load('contact', $siteLang);
            $ci->lang->load('form', $siteLang);
        } else {
            $ci->lang->load('home', 'vietnamese');
            $ci->lang->load('about', 'vietnamese');
            $ci->lang->load('error', 'vietnamese');
            $ci->lang->load('blog', 'vietnamese');
            $ci->lang->load('message', 'vietnamese');
            $ci->lang->load('header', 'vietnamese');
            $ci->lang->load('contact', 'vietnamese');
            $ci->lang->load('form', 'vietnamese');
            $ci->lang->load('service', 'vietnamese');
        }
    }

}
