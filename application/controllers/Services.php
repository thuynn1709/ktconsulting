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
class Services extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'cookie'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('servicesfront_model');
    }

    public function consulting() {
        $this->_loadFrontendHeader('services');
        $data = array();
        $data['title_menu'] = lang('menu_service_consulting');
        $data['active'] = 'consulting';
        $item = $this->servicesfront_model->get_one();
        $siteLang = $this->session->userdata('site_lang');
        $content_service = '';
        if ($siteLang == 'vietnamese') {
            $content_service = $item->consulting_vn;
        } else if ($siteLang == 'english') {
            $content_service = $item->consulting_en != '' ? $item->consulting_en : $item->consulting_vn;
        } else {
            $content_service = $item->consulting_de != '' ? $item->consulting_de : $item->consulting_vn;
        }
        $data['content_service'] = $content_service;
        $this->load->view('frontend/services/service-left-menu', $data);
        $this->load->view('frontend/services/consulting');
        $this->_loadFrontendCtaSection();
        $this->_loadFrontendFooter();
    }

    public function import_export() {
        $this->_loadFrontendHeader('services');
        $data = array();
        $data['title_menu'] = lang('menu_service_import_export');
        $data['service_open_hour'] = lang('service_open_hour');
        $data['active'] = 'import_export';
        $item = $this->fservices_model->get_one();
        $siteLang = $this->session->userdata('site_lang');
        $content_service = '';
        if ($siteLang == 'vietnamese') {
            $content_service = $item->import_export_vn;
        } else if ($siteLang == 'english') {
            $content_service = $item->import_export_en != '' ? $item->import_export_en : $item->import_export_vn;
        } else {
            $content_service = $item->import_export_de != '' ? $item->import_export_de : $item->import_export_vn;
        }
        $data['content_service'] = $content_service;
        $this->load->view('frontend/services/service-left-menu', $data);
        $this->load->view('frontend/services/import-export');
        $this->_loadFrontendCtaSection();
        $this->_loadFrontendFooter();
    }

    public function logistics() {
        $this->_loadFrontendHeader('services');
        $data = array();
        $data['title_menu'] = lang('menu_service_logistic');
        $data['active'] = 'logistics';
        $item = $this->servicesfront_model->get_one();
        $siteLang = $this->session->userdata('site_lang');
        $content_service = '';
        if ($siteLang == 'vietnamese') {
            $content_service = $item->logistics_vn;
        } else if ($siteLang == 'english') {
            $content_service = $item->logistics_en != '' ? $item->logistics_en : $item->logistics_vn;
        } else {
            $content_service = $item->logistics_de != '' ? $item->logistics_de : $item->logistics_vn;
        }
        $data['content_service'] = $content_service;
        $this->load->view('frontend/services/service-left-menu', $data);
        $this->load->view('frontend/services/logistics');
        $this->_loadFrontendCtaSection();
        $this->_loadFrontendFooter();
    }

}
