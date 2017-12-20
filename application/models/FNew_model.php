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
        $this->db->select('p.*, pc.id as pcid, pc.name_vn as pcname_vn, pc.name_en as pcname_en, pc.name_de as pcname_de, pc.alias as pcalias, pc.created as pccreated');
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
        $this->db->where('status', 1);
        $data =  $this->db->get( $this->table)->result();
        return $data;
    }
    
    public function get_by_alias( $alias) {
        $this->db->where('alias', $alias);
        $this->db->where('status', 1);
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
    
    public function update_views($id) {
        $this->db->set('readed', 'readed+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }
    
    public function get_recent_post() {
        $this->db->select('id, created, name_vn, name_de, name_en, author, status, alias, img');
        $this->db->from($this->table);
        $this->db->where('status', 1);
        $this->db->order_by('created', 'desc');
        $this->db->limit(2);
        return $this->db->get()->result();
    }
    
    public function get_most_readed() {
        $this->db->select('id, created, name_vn, name_de, name_en, author, status, alias, img');
        $this->db->from($this->table);
        $this->db->where('status', 1);
        $this->db->order_by('readed', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    
    public function get_prev_id($id) {
        $this->db->select('id, alias, created');
        $this->db->where('id <', $id);
        $this->db->order_by('created', 'desc');
        $this->db->limit(1);
        $data =  $this->db->get( $this->table)->result();
        return !empty($data) ? $data[0] : array();
    }
    
    public function get_next_id($id) {
        $this->db->select('id, alias, created');
        $this->db->where('id >', $id);
        $this->db->order_by('created', 'asc');
        $this->db->limit(1);
        $data =  $this->db->get( $this->table)->result();
        return !empty($data) ? $data[0] : array();       

    }
    
}
