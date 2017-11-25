<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends MX_Controller {

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
	var $table = "m_model";
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('M_model' => 'm_model'));
		$this->load->library(array('Auth_log'));
	}

	public function index()
	{
		$data['title'] = "Model";
		$data['view'] = "model/main";
		$this->load->view('default',$data);
	}

	public function getListTable() {
        $page = ($_GET['page']==0?1:$_GET['page']);
        $limit = $_GET['size'];
        
        $field = array(
            $this->table.".*",	
			'm_series.series_name',
			'm_vendor.vendor_name',
			'm_type.type_name',
            "IF(model_status=1,'Active','Not Active') AS status"
        );
        
        $offset = ($page - 1) * $limit;

        $join = array(
			array('table' => 'm_series', 'where' => 'm_series.id=m_model.id_series', 'join' => 'left'),
			array('table' => 'm_vendor', 'where' => 'm_vendor.id=m_model.id_vendor', 'join' => 'left'),
			array('table' => 'm_type', 'where' => 'm_type.id=m_model.id_type', 'join' => 'left')
		);
        
        $like = array(
            'model_name'=>isset($_GET['name'])?$_GET['name']:"",
            'model_description'=>isset($_GET['description'])?$_GET['description']:"",
        );
        $where = array('model_status !=' => '3');
        $sort = array(
            'sort_field' => isset($_GET['sort'])?$_GET['sort']:"id",
            'sort_direction' => isset($_GET['sort_dir'])?$_GET['sort_dir']:"desc"
        );

        $limit_row = array(
            'offset' => $offset,
            'limit' => $limit
        );
        
        $list = $this->m_model->getListTable($field,$this->table, $join, $like, $where, $sort, $limit_row);

        $total_records = count($this->m_model->getListTable($field,$this->table, $join, $like, $where, $sort, false));
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
		$data['title'] = "Model - Add";
		$data['view'] = "model/add";
		$this->load->view('default',$data);
	}

	public function edit($id) {
		$data['type'] = $this->db->get_where('m_type',array('type_status' => 1))->result_array();
		$data['title'] = "Model - Edit";
        $data['data'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'model/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        if ($this->db->update($this->table, array('model_status' => 3),array('id'=>$id))) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect("model");
    }

    function save() {
        if ($_POST) {
            if ($this->m_model->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("model");
        } else {
            show_404();
        }
    }

    public function getVendor() {
        $res = $this->m_model->getVendor($this->input->get('id'));
        echo json_encode($res);
    }

    public function getSeries() {
        $res = $this->m_model->getSeries($this->input->get('id'));
        echo json_encode($res);
    }
}
