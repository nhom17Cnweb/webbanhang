<?php
/**
* san pham
*/
class Book extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Book_Model');
	}

	function index()
	{
		$total = $this->Book_Model->get_total();
		$this->data['total']= $total;

		$this->load->library('pagination');
		$config = array();
		$config['base_url']    = base_url('admin/book/index');
		$config['total_rows']  = $total;
		$config['per_page']    = 2;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Trang kế";
		$config['prev_link']   = "Trang trước";
		$this->pagination->initialize($config);

		$segment= $this->uri->segment(4);
		$segment = intval($segment);
		$input= array();
		$input['limit']= array($config['per_page'], $segment);

		$list= $this->Book_Model->get_list($input);
		$this->data['list']= $list;



		//dat thong diep tra ve
		$message = $this->session->flashdata('message');
		$this->data['message']= $message;

		$this->data['temp']= 'admin/book/index';
		$this->load->view('admin/main',$this->data);
	}

	function load_add_view()
	{
		$this->data['temp'] = 'admin/book/add';
		$this->load->view('admin/main',$this->data); 
	}
}
?>