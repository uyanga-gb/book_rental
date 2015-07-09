<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('models');
		$this->load->model('queries');
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
		// var_dump($images);die;
        $this->load->view('category', array('categories'=>$categories, 'images'=>$images));
		// $this->load->view('category', $images);
		
	}
		public function products_search()
	{
		$search = $this->input->post('search');
		$results = $this->queries->searchdata($search);
		// var_dump($results);die;
		$this->load->view('/category', array('categories'=>$categories,'images'=>$results));		
	}
	public function show($productID){
		$productDetails = $this->models->getProductID($productID);
		// var_dump($productDetails);
		$this->load->view('show',array('productID'=>$productDetails));
	}

	public function shipping()
	{
		$this->session->set_userdata('shipping_info', $shipping_info);
		redirect('/products/carts');
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
    	redirect('/products/index');
	}
	public function carts()
	{
		$items=$this->session->userdata('cart');
		$cart_items=array();
		$total=0;
		foreach ($items as $key => $value) {
			$product=$this->models->getProductID($key);
			$quantity=$value;
			$price_num=intval($product['price']);
			$total+=$quantity*$price_num;
			$cart_items[]=array('id'=>$product['id'], 'name'=>$product['name'], 'price'=>$product['price'], 'quantity'=>$value, 'total'=>$total);
		}
		
		$this->load->view('carts', array('cart_items'=>$cart_items));
	
	}
	public function remove($id) {
		$cart_items = $this->session->userdata('cart');
		$initial_total = $this->session->userdata('total');
		$remove_quantity = $cart_items[$id];
		$initial_total -= $remove_quantity;
		unset($cart_items[$id]);
		$this->session->set_userdata('total', $initial_total);
		$this->session->set_userdata('cart', $cart_items);
		redirect('/products/carts');		 
	}
}
?>