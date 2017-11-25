<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

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
	 
	 public function __construct() {
		parent::__construct();
		$this->load->model(array('M_dashboard' => 'm_dashboard'));
		//$this->load->library(array('Auth_log'));
	}
	
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['type'] = $this->db->get_where('m_type',array('type_status'=>'1'))->result_array();
		//$data['view'] = "main";
		$this->load->view('main',$data);
	}

	public function getVendor() {
		$id = $this->input->get('id');
		$sql = $this->db->get_where('m_vendor',array('vendor_status'=>'1','id_type'=>$id))->result_array();
		echo json_encode($sql);
	}

	public function getSeries() {
		$id = $this->input->get('id');
		$sql = $this->db->get_where('m_series',array('series_status'=>'1','id_vendor'=>$id))->result_array();
		echo json_encode($sql);
	}

	public function getModel() {
		$id = $this->input->get('id');
		$sql = $this->db->get_where('m_model',array('model_status'=>'1','id_series'=>$id))->result_array();
		echo json_encode($sql);
	}

	public function getParamsCategory() {
		$idType = $this->input->get('id');
		$category = $this->m_dashboard->getCategory($idType);
		$dt = array();
		$dtSubcategory = array();
		foreach($category as $k=>$v) {
			$subcategory = $this->m_dashboard->getSubcategory($v['id']);
			/*foreach($subcategory as $kSub=>$vSub) {
				$dtSubcategory[] = array(
					'id_subcategory' => $vSub['id'],
					'subcategory' => $vSub['spec_subcategory_name'],
					'description' => $vSub['spec_subcategory_description']
				);
			}*/
			$dt[] = array(
				'id_category' => $v['id'],
				'category' => $v['spec_category_name'],
				'description' => $v['spec_category_description'],
				'subcategory' => $subcategory
			);
		}
		echo json_encode($dt);
	}

	public function getItem() {
		$id_model = $this->input->get('id');
		$result = $this->m_dashboard->getItem($id_model);
		echo json_encode($result);
	}
}
