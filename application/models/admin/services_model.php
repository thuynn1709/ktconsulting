<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productcategory_model
 *
 * @author Nguyen Ruy
 */
class Services_model extends CI_Model {
   
    public $table = 'services';
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function get_one( $id) {
        $this->db->where('id', $id);
        return  $this->db->get( $this->table)->row();
    }
    
    public function update($id , $data = array()){
        $this->db->where('id', $id);
        return $this->db->update( $this->table, $data);
    }
           
}
