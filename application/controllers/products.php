<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function index()
	{
		$categories=$this->models->category();
		$all_images=$this->models->all_images();
		// $images=$this->models->get_images($category_id);
		$this->load->view('category', array('categories'=>$categories, 'images'=>$all_images));
		// $this->load->view('category', $categories);
	}
	public function category($category_id)
	{
		$categories=$this->models->category();
		
		$images=$this->models->get_images($category_id);
        $this->load->view('category', array('categories'=>$categories, 'images'=>$images));
		// $this->load->view('category', $images);
		
	}
	public function show($productID){
		$productDetails = $this->models->getProductID($productID);
		$this->load->view('show',array('productID'=>$productDetails));
	}
	public function carts(){
		$this->load->view('carts');
	}
	public function buy($id){
    	$cart = $this->session->userdata('cart');
    	if(isset($cart[$id])) {
    		$cart[$id] += intval($this->input->post('quantity'));
    	}
    	else {
    		$cart[$id] = intval($this->input->post('quantity'));	
    	}
    	$total=$this->session->userdata('total');
    	$this->session->set_userdata('total', $total+$this->input->post('quantity'));
    	$this->session->set_userdata('cart',$cart);

        $product['product'] = $this->items->get_all();
		$this->load->view('category', $product);
	}
}
?>