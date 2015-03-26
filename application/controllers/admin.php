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
	public function validate()
	{
		$valid = $this->queries->checkuser();
		if ($valid == TRUE){
			$this->orders();
		} else {
			$this->session->set_flashdata('error', array('message' => 'Your email and password does not match information in the database. Try again.','class' => 'error'));
			redirect('/');
		}
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
	public function edit_product($product_id)
	{
		$categoryList = $this->queries->getCategories();
		$productImage = $this->queries->getProductImages($product_id);
		$productDetails = $this->queries->getProductDetails($product_id);
		$this->load->view('edit_product', array('mode' => $product_id,
												'categoryList' => $categoryList,
												'productImage' => $productImage,
												'productDetails' => $productDetails));
	}
	public function add_product()
	{
		$categoryList = $this->queries->getCategories();
		$this->load->view('edit_product', array('categoryList'=>$categoryList));
	}
	public function delete_product($id)
	{
			$this->queries->delete($id);
			redirect('/products');
	}
	public function update($id)
	{
			$this->queries->updateProduct($id);
			redirect('/products');
	}
	public function show($id)
	{
		$this->load->view('/dashboard/show');
	}
	public function signin()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
?>