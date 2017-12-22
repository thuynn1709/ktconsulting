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
        if (!$this->is_logged_in_admin()) {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/services_model');
        
    }
    
    public function index() {
        $this->_loadAdminHeader();
        $this->load->view('admin/services/index');
        $this->_loadAdminFooter();
    }


    public function manage() {
        $this->_loadAdminHeader();
        $id = 1;
        $data['item'] = $this->services_model->get_one($id);
        if (!$data['item']) {
            redirect('admin/services/magage/1');
        }
        if (isset($_POST['consulting_vn'])) {
            
            $consulting_vn = $_POST['consulting_vn'];
            $consulting_de = $_POST['consulting_de'];
            $consulting_en = $_POST['consulting_en'];
            $import_export_vn = $_POST['import_export_vn'];
            $import_export_de = $_POST['import_export_de'];
            $import_export_en = $_POST['import_export_en'];
            $logistics_vn = $_POST['logistics_vn'];
            $logistics_de = $_POST['logistics_de'];
            $logistics_en = $_POST['logistics_en'];
          
            $data = array(
                'consulting_vn' => $consulting_vn,
                'consulting_de' => $consulting_de,
                'consulting_en' => $consulting_en,
                'import_export_vn' => $import_export_vn,
                'import_export_de' => $import_export_de,
                'import_export_en' => $import_export_en,
                'logistics_vn' => $logistics_vn,
                'logistics_de' => $logistics_de,
                'logistics_en' => $logistics_en,
                'created' => now()
            );
            if ($this->services_model->update($id, $data)) {
                $this->session->set_flashdata('success', 'Cập nhật thông tin thành công!');
                redirect('admin/services/index');
            } else {
                $this->session->set_flashdata('error', 'Cập nhật thông tin không thành thành công  !');
                redirect('admin/services/index');
            }
        }

        $this->load->view('admin/services/edit', $data);
        $this->_loadAdminFooter();
    }

}
