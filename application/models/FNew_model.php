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
class FNew_model extends CI_Model {
   
    public $table = 'news';
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_all_by_categoryId( $id, $limit = null) {
        $this->db->select('*');
        $this->db->where('category_id', $id);
        $this->db->where('status', 1);
        $this->db->order_by('amount', 'desc');
        if ($limit){
            $this->db->limit($limit);
        }
        return  $this->db->get( $this->table)->result();
    }
    
    public function get_all_by_Ids( $ids) {
        $this->db->select('*');
        $this->db->where_in('id', $ids);
        $this->db->where('status', 1);
        $this->db->order_by('created', 'desc');
        return  $this->db->get( $this->table)->result();
    }
    
    public function get_all($search = '', $limit = 10, $offset = 0) {
        $this->db->select('p.*, pc.id as pcid, pc.name_vn as pcname, pc.created as pccreated');
        $this->db->from($this->table. ' as p');
        $this->db->join('news_category as pc', 'p.category_id = pc.id');
        if ($search != '') {
            $this->db->like('p.name', $search);
        }
      
        $this->db->where('p.status', 1);
        $this->db->order_by('p.created', 'desc');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
    }
    
    public function get_one( $id) {
        $this->db->where('id', $id);
        $data =  $this->db->get( $this->table)->result();
        return !empty($data) ? $data[0] : array();
    }
    
    public function count_all_results($search = '') {
        $this->db->select('p.*, pc.id as pcid, pc.name_vn as pcname');
        $this->db->from($this->table. ' as p');
        $this->db->join('news_category as pc', 'p.category_id = pc.id', 'left');
        if ($search != '') {
            $this->db->like('p.pname', $search);
        }
       
        $this->db->where('p.status', 1);
        return $this->db->count_all_results();
    }
}
