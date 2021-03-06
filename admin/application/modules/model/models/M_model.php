<?php

class M_model extends CI_Model {
    var $table = "m_model";
    
    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'id_type' => $this->input->post('id_type'),
            'id_vendor' => $this->input->post('id_vendor'),
			'id_series' => $this->input->post('id_series'),
            'model_name' => $this->input->post('model_name'),
            'model_description' => $this->input->post('model_description'),
            'model_status' => $this->input->post('model_status')
        );
        if (empty($id)) {
            $this->db->insert($this->table,$data);
            return true;
        } else {
            $this->db->update($this->table,$data, array('id' => $id));
            return true;
        }
        return false;
    }
    
    public function getListTable($field,$table,$join,$like,$where,$sort,$limit) {
        $this->db->select($field);
        $this->db->from($table);
        if(count($join) > 0) {
            foreach($join as $kJoin=>$vJoin){
                $this->db->join($vJoin['table'],$vJoin['where'],$vJoin['join']);
            }
        }
        if(count($where) > 0) {
            $this->db->where($where);
        }
        if(count($like) > 0) {
            $this->db->like($like);
        }
        $this->db->order_by($sort['sort_field'],$sort['sort_direction']);
        $this->db->limit($limit['limit'],$limit['offset']);
        return $sql = $this->db->get()->result_array();
    }

    public function getVendor($id_type) {
        $this->db->select('id,vendor_name');
        $this->db->from('m_vendor');
        $this->db->where(array('id_type'=>$id_type));
        $this->db->order_by('vendor_name','asc');
        return $this->db->get()->result_array();
    }

    public function getSeries($id_vendor) {
        $this->db->select('id,series_name');
        $this->db->from('m_series');
        $this->db->where(array('id_vendor'=>$id_vendor));
        $this->db->order_by('series_name','asc');
        return $this->db->get()->result_array();
    }
}