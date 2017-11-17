<?php

class M_category extends CI_Model {
    var $table = "spec_category";
    
    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'id_type' => $this->input->post('id_type'),
            'spec_category_name' => $this->input->post('spec_category_name'),
            'spec_category_description' => $this->input->post('spec_category_description'),
            'spec_category_status' => $this->input->post('spec_category_status')
        );
        if (empty($id)) {
            $this->db->insert($this->table,array_merge($data,array('spec_category_position' => $this->__getPosition($this->input->post('id_type')))));
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
        //$this->db->order_by($sort['sort_field'],$sort['sort_direction']);
        $this->db->order_by('id_type asc,spec_category_position asc');
        $this->db->limit($limit['limit'],$limit['offset']);
        return $sql = $this->db->get()->result_array();
    }

    private function __getPosition($id_type) {
        $this->db->select_max('spec_category_position');
        $this->db->from($this->table);
		$this->db->where('id_type',$id_type);
        $res = $this->db->get()->row_array();

        if($res['spec_category_position'] != NULL) { 
            $pos = $res['spec_category_position'] + 1;
        } else {
            $pos = 1;
        }
        return $pos;
    }

    function sortData($dt) {
        foreach($dt as $k=>$v) {
            $this->db->update('spec_category',array('spec_category_position' => $k+1),array('id'=>$v['id']));
        }
        return true;
    }
}