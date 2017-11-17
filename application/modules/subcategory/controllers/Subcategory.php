<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	var $table = "spec_subcategory";
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('M_subcategory' => 'm_subcategory'));
		$this->load->library(array('Auth_log'));
	}

	public function index($id)
	{
        $data['title'] = "Subategory";
        $data['id_spec_category'] = $id;
		$data['view'] = "main";
		$this->load->view('default',$data);
	}

	public function getListTable() {
        $page = ($_GET['page']==0?1:$_GET['page']);
        $limit = $_GET['size'];
        
        $field = array(
            $this->table.".*",
            "IF(spec_subcategory_status=1,'Active','Not Active') AS status"
        );
        
        $offset = ($page - 1) * $limit;

        $join = array();
        
        $like = array(
            'spec_subcategory_name'=>isset($_GET['name'])?$_GET['name']:"",
            'spec_subcategory_description'=>isset($_GET['description'])?$_GET['description']:"",
        );
        $where = array('spec_subcategory_status !=' => '3','id_spec_category' => $_GET['id_spec_category']);
        $sort = array(
            'sort_field' => isset($_GET['sort'])?$_GET['sort']:"spec_subcategory_position",
            'sort_direction' => isset($_GET['sort_dir'])?$_GET['sort_dir']:"asc"
        );

        $limit_row = array(
            'offset' => $offset,
            'limit' => $limit
        );
        
        $list = $this->m_subcategory->getListTable($field,$this->table, $join, $like, $where, $sort, $limit_row);

        $total_records = count($this->m_subcategory->getListTable($field,$this->table, $join, $like, $where, $sort, false));
        $total_pages = ceil($total_records / $limit);
        $output = array(
            "last_page" => $total_pages,
            "recordsTotal" => $total_records,
            "data" => $list,
        );
        //output to json format
        echo json_encode($output);
	}
	
	public function add($id_spec_category) {
        $data['title'] = "Subcategory - Add";
        $data['id_spec_category'] = $id_spec_category;
		$data['view'] = "subcategory/add";
		$this->load->view('default',$data);
	}

	public function edit($id_spec_category, $id) {
        $data['id_spec_category'] = $id_spec_category;
		$data['title'] = "Subategory - Edit";
        $data['data'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'subcategory/edit';
        $this->load->view('default', $data);
    }

    function delete($id_spec_category, $id) {
        if ($this->db->update($this->table, array('spec_subcategory_status' => 3),array('id'=>$id))) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect('category-detail-' . $id_spec_category);
    }

    function save() {
        if ($_POST) {
            if ($this->m_subcategory->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect('category-detail-'.$this->input->post('id_spec_category'));
        } else {
            show_404();
        }
    }

    function sortData() {
        $dt = json_decode($this->input->post('data'),true);
        $id_spec_category = json_decode($this->input->post('id_spec_category'),true);
        $query = $this->m_subcategory->sortData($dt,$id_spec_category);
        if ($query) {
            return true;
        }
        return false;
    }
}
