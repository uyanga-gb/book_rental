<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$this->load->view('dashboard/products');	
	}
	public function edit_product(){
		$this->load->view('/edit_product');
	}
	public function show()
	{
		$this->load->view('show');
	}
	
}
?>