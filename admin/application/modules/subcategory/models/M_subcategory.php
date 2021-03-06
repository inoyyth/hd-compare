<?php

class M_subcategory extends CI_Model {
    var $table = "spec_subcategory";
    
    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'id_spec_category' => $this->input->post('id_spec_category'),
            'spec_subcategory_name' => $this->input->post('spec_subcategory_name'),
            'spec_subcategory_description' => $this->input->post('spec_subcategory_description'),
            'spec_subcategory_status' => $this->input->post('spec_subcategory_status')
        );
        if (empty($id)) {
            $this->db->insert($this->table,array_merge($data,array('spec_subcategory_position' => $this->__getPosition())));
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
        $this->db->select_max('spec_subcategory_position');
        $this->db->from($this->table);
        $res = $this->db->get()->row_array();

        if($res['spec_subcategory_position'] != NULL) { 
            $pos = $res['spec_subcategory_position'] + 1;
        } else {
            $pos = 1;
        }
        return $pos;
    }

    function sortData($dt, $id_spec_category) {
        foreach($dt as $k=>$v) {
            $this->db->update('spec_subcategory',array('spec_subcategory_position' => $k+1),array('id'=>$v['id'],'id_spec_category'=>$id_spec_category));
        }
        return true;
    }
}