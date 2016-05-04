<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * FullStack Admin Core
 */


class UX_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('ion_auth');
		$this->load->helper('url');
		$this->_verify();
	}
	
	private function _verify()
	{
		$this->lang->load('auth');
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
		//	redirect('login');
		}
	} 

	
}
