<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Series extends MX_Controller {

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
	var $table = "m_series";
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('M_series' => 'm_series'));
		//$this->load->library(array('Auth_log'));
	}

	public function index()
	{
		$data['title'] = "Series";
		$data['view'] = "main";
		$this->load->view('default',$data);
	}

	public function getListTable() {
        $page = ($_GET['page']==0?1:$_GET['page']);
        $limit = $_GET['size'];
        
        $field = array(
            $this->table.".*",
			"m_vendor.vendor_name",
            "IF(series_status=1,'Active','Not Active') AS status"
        );
        
        $offset = ($page - 1) * $limit;

        $join = array(
			array('table' => 'm_vendor', 'where' => 'm_vendor.id=m_series.id_vendor', 'join' => 'left')
		);
        
        $like = array(
            'series_name'=>isset($_GET['name'])?$_GET['name']:"",
            'series_description'=>isset($_GET['description'])?$_GET['description']:"",
        );
        $where = array('series_status !=' => '3');
        $sort = array(
            'sort_field' => isset($_GET['sort'])?$_GET['sort']:"id",
            'sort_direction' => isset($_GET['sort_dir'])?$_GET['sort_dir']:"desc"
        );

        $limit_row = array(
            'offset' => $offset,
            'limit' => $limit
        );
        
        $list = $this->m_series->getListTable($field,$this->table, $join, $like, $where, $sort, $limit_row);

        $total_records = count($this->m_series->getListTable($field,$this->table, $join, $like, $where, $sort, false));
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
		$data['vendor'] = $this->db->get_where('m_vendor',array('vendor_status' => 1))->result_array();
		$data['title'] = "Series - Add";
		$data['view'] = "series/add";
		$this->load->view('default',$data);
	}

	public function edit($id) {
		$data['vendor'] = $this->db->get_where('m_vendor',array('vendor_status' => 1))->result_array();
		$data['title'] = "Series - Edit";
        $data['data'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'series/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        if ($this->db->update($this->table, array('series_status' => 3),array('id'=>$id))) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect("series");
    }

    function save() {
        if ($_POST) {
            if ($this->m_series->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("series");
        } else {
            show_404();
        }
    }
}
