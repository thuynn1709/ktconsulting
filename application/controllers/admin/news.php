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
        if (!$this->is_logged_in_admin()) {
            redirect(base_url('admin/login/login'));
        }
        $this->load->model('admin/newcategory_model');
        $this->load->model('admin/new_model');
        $this->load->model('admin/menu_model');
        $this->load->library('pagination');
    }

    public function index() {


        $this->_loadAdminHeader();
        $search = '';
        $category = '';
        if ($_POST) {
            $search = $_POST['search'];
            $category = $_POST['category'];
        }
        $data = array();
        $limit = 20;
        $config = array();
        $config["base_url"] = base_url() . "admin/news/index";
        $total_row = $this->new_model->count_all_results($search, $category);
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
        $offset = 0;
        $offset = $this->uri->segment(4) > 0 ? (($this->uri->segment(4) + 0) * $config['per_page'] - $config['per_page']) : $this->uri->segment(4);

        $data["results"] = $this->new_model->get_all($search, $category, $config["per_page"], $offset);
        $data["links"] = $this->pagination->create_links();

        // View data according to array.
        $data['search'] = $search;
        $data['offset'] = $offset;
        $data["category"] = $this->newcategory_model->get_all(100, 0);

        $this->load->view('admin/new/index', $data);
        $this->_loadAdminFooter();
    }

    public function add() {
        if (isset($_POST['name_vn'])) {

            $name_vn = $_POST['name_vn'];
            $alias = sanitizeTitle($name_vn);
            $check = $this->new_model->check_one_by_alias($alias);
            if ($check) {
                $this->session->set_flashdata('exist_name', 'Đã tồn tại tiêu đề tên này !');
            }
            if (!$check) {
                $this->load->library('upload', $this->set_upload_options());
                if ($this->upload->do_upload('img')) {
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];
                }
                $name_de = $_POST['name_de'];
                $name_en = $_POST['name_en'];
                $name_vn = $_POST['name_vn'];
                $alias = sanitizeTitle($name_vn);
                $category = $_POST['category'];
                $img = $file_name != '' ? $file_name : $product->img;

                $desc_vn = $_POST['desc_vn'];
                $desc_de = $_POST['desc_de'];
                $desc_en = $_POST['desc_en'];

                $content_vn = $_POST['content_vn'];
                $content_de = $_POST['content_de'];
                $content_en = $_POST['content_en'];

                $author = $_POST['author'];
                $status = $_POST['status'];
                $created = now();


                $data = array(
                    'name_vn' => $name_vn,
                    'name_en' => $name_en,
                    'name_de' => $name_de,
                    'alias' => $alias,
                    'category_id' => $category,
                    'img' => $img,
                    'desc_vn' => $desc_vn,
                    'desc_de' => $desc_de,
                    'desc_en' => $desc_en,
                    'content_en' => $content_en,
                    'content_de' => $content_de,
                    'content_vn' => $content_vn,
                    'author' => $author,
                    'status' => $status,
                    'created' => $created,
                );
                if ($this->new_model->insert($data)) {
                    redirect('admin/news/index');
                } else {
                    redirect('admin/news/add');
                }
            }
        }

        $this->_loadAdminHeader();
        $category = array();
        $category = $this->newcategory_model->get_all();
        $data['category'] = $category;
        $this->load->view('admin/new/add', $data);
        $this->_loadAdminFooter();
    }

    public function edit() {
        $id = $this->uri->segment(4);
        if (empty($id)) {
            show_404();
        }

        $new = $this->new_model->get_one($id);

        if (count((array) $new) == 0) {
            redirect('admin/news/index');
        }

        if (isset($_POST['name_vn'])) {
            $this->load->library('upload', $this->set_upload_options());
            if ($this->upload->do_upload('img')) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
            }
            $name_de = $_POST['name_de'];
            $name_en = $_POST['name_en'];
            $name_vn = $_POST['name_vn'];
            $alias = sanitizeTitle($name_vn);
            $category = $_POST['category'];
            $img = $file_name != '' ? $file_name : $product->img;

            $desc_vn = $_POST['desc_vn'];
            $desc_de = $_POST['desc_de'];
            $desc_en = $_POST['desc_en'];

            $content_vn = $_POST['content_vn'];
            $content_de = $_POST['content_de'];
            $content_en = $_POST['content_en'];

            $author = $_POST['author'];
            $status = $_POST['status'];
            $created = now();


            $data = array(
                'name_vn' => $name_vn,
                'name_en' => $name_en,
                'name_de' => $name_de,
                'alias' => $alias,
                'category_id' => $category,
                'img' => $img,
                'desc_vn' => $desc_vn,
                'desc_de' => $desc_de,
                'desc_en' => $desc_en,
                'content_en' => $content_en,
                'content_de' => $content_de,
                'content_vn' => $content_vn,
                'author' => $author,
                'status' => $status,
                'created' => $created,
            );

            if ($this->new_model->update($id, $data)) {
                redirect('admin/news/index');
            } else {
                redirect('admin/news/add');
            }
        }

        $this->_loadAdminHeader();
        
        $data['categories'] = $this->newcategory_model->get_all();;
        $data['item'] = $new;
        $this->load->view('admin/new/edit', $data);
        $this->_loadAdminFooter();
    }

    public function delete() {
        $id = $this->uri->segment(4);
        if (empty($id)) {
            show_404();
        }
        $new = $this->new_model->get_one($id);
        unlink(base_url().'public/images/news/'.$new->img);
        $this->new_model->del_one($id);
        redirect('admin/news/index');
    }

    private function set_upload_options() {
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/images/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;

        return $config;
    }
    
    function deleteImage($filename){
      
      $path = base_url().'public/images/news/'.$filename ;
      if(is_file($path)){
        unlink($path);
        echo 'File '.$filename.' has been deleted';die;
      } else {
        echo 'Could not delete '.$filename.', file does not exist';die;
      }
  }

}
