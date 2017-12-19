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
class News extends MY_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('fnew_model');
        $this->load->model('fnewcategory_model');
        $this->load->library('pagination');
    }
    
    public function index() {

        $this->_loadFrontendHeader('news');
        
        $data = array();
        $search = '';
        $category = '';
        if ($_POST) {
            $search = $_POST['search'];
        }
        $data = array();
        $limit = 5;
        $config = array();
        $config["base_url"] = base_url() . "news/index";
        $total_row = $this->fnew_model->count_all_results($search);
        $config["total_rows"] = $total_row;
        $config["per_page"] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev.';
        $config['attributes'] = array('class' => 'prev','class' => 'next');
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
       
        $offset = $this->uri->segment(3) > 0 ? (($this->uri->segment(3) + 0) * $config['per_page'] - $config['per_page']) : $this->uri->segment(3);
        $data["results"] = $this->fnew_model->get_all($search, $config["per_page"], $offset);
        $data["links"] = $this->pagination->create_links();

        // View data according to array.
        $data['search'] = $search;

        $data['categories'] = $this->fnewcategory_model->get_alls();
 
        $this->load->view('frontend/news/index', $data);
        $this->_loadFrontendFooter();
    }
    
    public function detail(){
        
        $this->_loadFrontendHeader('news');
        $this->load->view('frontend/news/index');
        $this->_loadFrontendFooter();
        
    }
}
