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

	
	public function show(){
		$this->load->view('show');
	}
	public function carts(){
		$this->load->view('carts');
	}
	public function buy(){
		// this is where we add the qty and id to the cart
		$this->load->view('category');
	}
}
?>