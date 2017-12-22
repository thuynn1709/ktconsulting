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
class Servicesfront_model extends CI_Model {
   
    public $table = 'services';
    private $id = 1;
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_one() {
        $this->db->where('id', $this->id);
        $this->db->limit( 1);
        $data =  $this->db->get( $this->table)->row();
        return $data;
    }
    
}
