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
		$images=$this->models->get_images($category_id);
		$this->load->view('category', array('categories'=>$categories, 'images'=>$images));
	}


	
	public function show(){
		$this->load->view('show');
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