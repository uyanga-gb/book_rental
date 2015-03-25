<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('queries');
	}

	public function index()
	{
		$this->load->view('admin');
	}
	public function orders()
	{
		$this->load->view('dashboard/orders');
	}
	public function products(){
		$results = $this->queries->getdata();
		$this->load->view('dashboard/products', array('list'=>$results));	
	}
	public function products_search()
	{
		$search = $this->input->post('search');
		$results = $this->queries->searchdata($search);
		var_dump($results);die;
		$this->load->view('dashboard/products', array('list'=>$results));		
	}
	public function edit_product(){
		$valid = $this->query->checkuser();
		if ($valid == '1'){
			$this->query->
			$this->load->view('/edit_product');
		} else {
			$this->products();;
		}
	}
	public function delete_product($id)
	{
			$this->queries->delete($id);
			$this->products();
	}
	public function show($id)
	{
		$this->load->view('/dashboard/show');
	}
	public function signin()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
?>