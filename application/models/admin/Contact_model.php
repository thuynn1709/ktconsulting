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
class Contact_model extends CI_Model {
   
    public $table = 'contact';
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all( $search = '', $limit = 10, $offset = 0) {
        if ($search != '') {
            $this->db->like('email', $search);
            $this->db->or_like('name', $search);
        }
        $this->db->order_by("created", "desc");
        $this->db->limit($limit, $offset);
        $this->db->last_query();
        $result =  $this->db->get($this->table)->result();
        
        return $result;
    }
    
    public function get_one( $id) {
        $this->db->where('id', $id);
        return   $this->db->get( $this->table)->row();
    }
    
    public function count_all_results($search = '') {
        if ($search != '') {
            $this->db->like('email', $search);
            $this->db->or_like('name', $search);
        }
        $this->db->from( $this->table);
        return $this->db->count_all_results();
    }
    
    public function count_all() {
        $this->db->from( $this->table);
        return $this->db->count_all_results();
    }
    
    public function count_new_email() {
        $this->db->where('status', 0);
        $this->db->from( $this->table);
        return $this->db->count_all_results();
    }
    
    public function del_one ($id){
        return $this->db->delete( $this->table, array('id' => $id));  
    }
    
    public function del_all(){
        return $this->db->empty_table( $this->table); 
    }

    public function update($id , $data = array()){
        $this->db->where('id', $id);
        return $this->db->update( $this->table, $data);
    }

    public function update_readed($id){
        $this->db->where('id', $id);
        return $this->db->update( $this->table, array('status' => 1));
    }
    
    public function insert ($data, $insert_batch = false){
        if ( $insert_batch) {
            $this->db->insert_batch( $this->table, $data);
            return true;
        }
        $this->db->insert( $this->table, $data);
        return true;
    }
       
}
