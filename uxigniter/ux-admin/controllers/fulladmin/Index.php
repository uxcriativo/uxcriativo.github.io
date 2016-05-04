<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends ADMIN_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
		$this->load->library('ion_auth');
		if ($this->ion_auth->logged_in())
		{
			echo 'PRIVATE AREA<a href="'.$this->baseurl.'auth/logout">Logout</a>';
			$this->load->view('admin');
		}
		else 
		{
			redirect('auth/login');
		}
	}
}
