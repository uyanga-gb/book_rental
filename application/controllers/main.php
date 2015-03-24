<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('admin_nav');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function admin_dashboard()
	{
		$this->load->view('admin_dashboard');
	}
	public function show()
	{
		$this->load->view('show');
	}
	
}
?>