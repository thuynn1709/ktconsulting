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
class New_category extends MY_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        if (! $this->is_logged_in_admin())
        {
            redirect(base_url('admin/login/login')); 
        }
        $this->load->model('admin/newcategory_model');
        $this->load->model('admin/menu_model');
        $this->load->library('pagination');
    }
    
    public function index(){
        
        $this->_loadAdminHeader();
        
        $data = array();
        $limit = 10;
        $config = array();
        $config["base_url"] = base_url() . "admin/new_category/index";
        $total_row = $this->newcategory_model->count_all_results();
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
        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        
        
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->newcategory_model->get_all($config["per_page"], $page);
        
        $data["links"] = $this->pagination->create_links();

        // View data according to array.
        
        $this->load->view('admin/new_category/index', $data);
        $this->_loadAdminFooter();
    }
    
    public function add(){
        $this->_loadAdminHeader();
        
        if (isset($_POST['name_vn'])){
            
            $name_vn = $_POST['name_vn'];
            $name_en = $_POST['name_en'];
            $name_de = $_POST['name_de'];
            $alias = sanitizeTitle($name_vn);
            $priority = $_POST['priority'];
            $status = $_POST['status'];
            
            $data = array('name_vn'=> $name_vn,
                          'name_en'=> $name_en,
                          'name_de'=> $name_de,
                          'priority'=>$priority,
                          'alias'=> $alias,
                          'status'=> $status,
                          'created' => now()
                    );
            if ($this->newcategory_model->insert($data)) {
                redirect('admin/new_category/index');
            } else{ 
                redirect('admin/new_category/add');
            }
            
        }
       
        $this->load->view('admin/new_category/add');
        $this->_loadAdminFooter();
    }
    
    public function edit(){
        $this->_loadAdminHeader();
        $id = $this->uri->segment(4);
        if (empty($id))
        {
            show_404();
        }
        $data['item'] = $this->newcategory_model->get_one($id);
        
        if ( !$data['item']) {
            redirect('admin/new_category/index');
        }
        if (isset($_POST['name_vn'])){
            $name_vn = $_POST['name_vn'];
            $name_en = $_POST['name_en'];
            $name_de = $_POST['name_de'];
            $alias = sanitizeTitle($name_vn);
            $priority = $_POST['priority'];
            $status = $_POST['status'];
            
            $data = array('name_vn'=> $name_vn,
                          'name_en'=> $name_en,
                          'name_de'=> $name_de,
                          'alias'=>$alias,
                          'status'=>$status,
                          'priority'=>$priority,
                          'created' => now()
                    );
            if ($this->newcategory_model->update($id, $data)) {
                redirect('admin/new_category/index');
            } 
        }
        
        $this->load->view('admin/new_category/edit', $data);
        $this->_loadAdminFooter();
    }
    
    public function delete()
    {
        $id = $this->uri->segment(4);
        
        if (empty($id))
        {
            show_404();
        }

        $this->newcategory_model->del_one($id);        
        redirect('admin/new_category/index');  
    }
}
