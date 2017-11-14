<?php

class M_category extends CI_Model {
    var $table = "spec_category";
    
    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'spec_category_name' => $this->input->post('spec_category_name'),
            'spec_category_description' => $this->input->post('spec_category_description'),
            'spec_category_status' => $this->input->post('spec_category_status'),
            'spec_category_position' => $this->__getPosition()
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

    private function __getPosition() {
        $this->db->select_max('spec_category_position');
        $this->db->from($this->table);
        $res = $this->db->get()->row_array();

        if($res['spec_category_position'] != NULL) { 
            $pos = $res['spec_category_position'];
        } else {
            $pos = 1;
        }
        return $pos;
    }
}