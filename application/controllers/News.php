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
        $this->load->model('newfront_model');
        $this->load->model('newcategoryfront_model');
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
        $total_row = $this->newfront_model->count_all_results($search);
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
        $data["results"] = $this->newfront_model->get_all($search, $config["per_page"], $offset);
        $data["links"] = $this->pagination->create_links();

        // View data according to array.
        $data['search'] = $search;

        $data['categories'] = $this->newcategoryfront_model->get_alls();
        $data['recent_post'] = $this->newfront_model->get_recent_post();
        $data['most_read'] = $this->newfront_model->get_most_readed();
 
        $this->load->view('frontend/news/index', $data);
        $this->_loadFrontendFooter();
    }
    
    public function detail(){
        $alias = $this->uri->segment(3);
        if (empty($alias)) {
            show_404();
        }
        $result = $this->newfront_model->get_by_alias($alias);
        
        if (empty($result)) {
            show_404();
        }
        $this->_loadFrontendHeader('news');
        $data['item'] = $result;
        $data['siteLang'] = $this->session->userdata('site_lang');
        $data['categories'] = $this->newcategoryfront_model->get_alls();
        $data['recent_post'] = $this->newfront_model->get_recent_post();
        $data['most_read'] = $this->newfront_model->get_most_readed();
        $data['link_prev'] = $this->newfront_model->get_prev_id($result->id);
        $data['link_next'] = $this->newfront_model->get_next_id($result->id);
        $this->newfront_model->update_views($result->id);
        $this->load->view('frontend/news/detail', $data);
        $this->_loadFrontendFooter();
        
    }
}
