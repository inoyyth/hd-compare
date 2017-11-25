<?php

class M_vendor extends CI_Model {
    var $table = "m_vendor";
    
    public function save() {
        $id = $this->input->post('id');
        $data = array(
			'id_type' => $this->input->post('id_type'),
            'vendor_name' => $this->input->post('vendor_name'),
            'vendor_description' => $this->input->post('vendor_description'),
            'vendor_status' => $this->input->post('vendor_status')
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
}