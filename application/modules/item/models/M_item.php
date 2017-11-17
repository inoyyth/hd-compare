<?php

class M_item extends CI_Model {
    var $table = "m_item";
    
    public function save() {
        $id = $_POST['id'];
        unset($_POST['_wysihtml5_mode']);
        unset($_POST['id']);
        #var_dump($_POST);die;
        $dt = array();
        foreach ($_POST as $k=>$v) {
            $exData = explode('|',$k);
            $model = $exData[0];
            $category = $exData[1];
            $subcategory = $exData[2];
            
            $dt[] = array(
                'id_model' => $model,
                'id_category' => $category,
                'id_sub_category' => $subcategory,
                'item_name' => $v[0],
                'item_description' => $v[1]
            );
        }
        $this->db->delete('item',array('id_model'=>$id));
        $this->db->insert_batch('item', $dt); 
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

    public function getItemForm($id_model) {
        $this->db->select('m_model.*,m_type.type_name,m_vendor.vendor_name,m_series.series_name');
        $this->db->from('m_model');
        $this->db->join('m_type','m_type.id=m_model.id_type','inner');
        $this->db->join('m_vendor','m_vendor.id=m_model.id_vendor','inner');
        $this->db->join('m_series','m_series.id=m_model.id_series','inner');
        $this->db->where(array('m_model.id'=>$id_model));
        return $this->db->get()->row_array();
    }

    public function getCategory() {
        $this->db->select('*');
        $this->db->from('spec_category');
        $this->db->where('spec_category_status','1');
        $this->db->order_by('spec_category_position','asc');
        return $this->db->get()->result_array();
    }
}