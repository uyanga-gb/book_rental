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
		// $logged_user = $this->queries->checkuser();
		if ($valid == TRUE){
			$this->load->view('dashboard/admin_nav', array('user'=> $valid));
			// $this->products($valid);
			// $this->orders($id);

		} else {
			$this->session->set_flashdata('error', array('message' => 'Your email and password does not match information in the database. Try again.','class' => 'error'));
			redirect('/');
		}
	}
	public function register() {
		$this->load->helper(array('form', 'url'));
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]|is_unique[users.password");
		$this->form_validation->set_rules("confirm_password", "Password Confirmation", "required|matches[password]");
		if($this->form_validation->run()===FALSE)
		{
			$reg_err=$this->form_validation->error_string();
			$this->session->set_flashdata('reg_err', $reg_err);
			redirect('/');
		}
		else {
			// var_dump($this->input->post());
			$this->queries->register($this->input->post());
			$message=array('message'=>'You are successfully registered, please login!');
			$this->session->set_flashdata('success', $message);
			redirect('/');
		}
	}
	public function orders($id)
	{
		$logged_user_id = $id;
		// var_dump($logged_user_id);
		$this->load->view('dashboard/orders', array('user'=> $logged_user_id));
	}
	public function products($id){
		$logged_user_id = $id;
		// var_dump($logged_user_id);
		// $this->load->view('dashboard/products');
		$results = $this->queries->getdata($logged_user_id);
		$this->load->view('dashboard/products', array('list'=>$results,
														'user' => $logged_user_id));	
	}
	public function products_search()
	{
		$search = $this->input->post('search');
		$results = $this->queries->searchdata($search);
		// var_dump($results);die;
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
	public function add_product($id)
	{
		$logged_user_id = $id;
		// var_dump($id);
		$categoryList = $this->queries->getCategories();
		$this->load->view('add_product', array('categoryList'=>$categoryList,
												'user' => $logged_user_id));
	}
	public function add_item() 
	{
		// $this->queries->addProduct($id);
		$this->queries->addProduct($this->input->post());
		redirect('/products');
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