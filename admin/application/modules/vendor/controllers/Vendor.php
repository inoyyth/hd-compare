<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends MX_Controller {

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
	var $table = "m_vendor";
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('M_vendor' => 'm_vendor'));
		$this->load->library(array('Auth_log'));
	}

	public function index()
	{
		$data['title'] = "Vendor";
		$data['view'] = "main";
		$this->load->view('default',$data);
	}

	public function getListTable() {
        $page = ($_GET['page']==0?1:$_GET['page']);
        $limit = $_GET['size'];
        
        $field = array(
            $this->table.".*",
			"m_type.type_name",
            "IF(vendor_status=1,'Active','Not Active') AS status"
        );
        
        $offset = ($page - 1) * $limit;

        $join = array(
			array('table' => 'm_type', 'where' => 'm_type.id=m_vendor.id_type', 'join' => 'left')
		);
        
        $like = array(
            'vendor_name'=>isset($_GET['name'])?$_GET['name']:"",
            'vendor_description'=>isset($_GET['description'])?$_GET['description']:"",
        );
        $where = array('vendor_status !=' => '3');
        $sort = array(
            'sort_field' => isset($_GET['sort'])?$_GET['sort']:"id",
            'sort_direction' => isset($_GET['sort_dir'])?$_GET['sort_dir']:"desc"
        );

        $limit_row = array(
            'offset' => $offset,
            'limit' => $limit
        );
        
        $list = $this->m_vendor->getListTable($field,$this->table, $join, $like, $where, $sort, $limit_row);

        $total_records = count($this->m_vendor->getListTable($field,$this->table, $join, $like, $where, $sort, false));
        $total_pages = ceil($total_records / $limit);
        $output = array(
            "last_page" => $total_pages,
            "recordsTotal" => $total_records,
            "data" => $list,
        );
        //output to json format
        echo json_encode($output);
	}
	
	public function add() {
		$data['type'] = $this->db->get_where('m_type',array('type_status' => 1))->result_array();
		$data['title'] = "Vendor - Add";
		$data['view'] = "vendor/add";
		$this->load->view('default',$data);
	}

	public function edit($id) {
		$data['type'] = $this->db->get_where('m_type',array('type_status' => 1))->result_array();
		$data['title'] = "Vendor - Edit";
        $data['data'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'vendor/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        if ($this->db->update($this->table, array('vendor_status' => 3),array('id'=>$id))) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect("vendor");
    }

    function save() {
        if ($_POST) {
            if ($this->m_vendor->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("vendor");
        } else {
            show_404();
        }
    }
}
