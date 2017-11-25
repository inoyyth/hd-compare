<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function getCategory($idType) {
        $this->db->select('*');
        $this->db->from('spec_category');
        $this->db->where(array('id_type'=>$idType,'spec_category_status'=>'1'));
        $this->db->order_by('spec_category_position');

        return $this->db->get()->result_array();
    }

    public function getSubcategory($id) {
        $this->db->select('*');
        $this->db->from('spec_subcategory');
        $this->db->where(array('id_spec_category'=>$id,'spec_subcategory_status'=>'1'));
        $this->db->order_by('spec_subcategory_position');

        return $this->db->get()->result_array();
    }

    public function getItem($id) {
        $this->db->select('*');
        $this->db->from('item');
        $this->db->where('id_model',$id);
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();
    }
}