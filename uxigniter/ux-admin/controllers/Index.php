<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * @UXigniter 1.0
	 * https://github.com/uxcriativo/UXigniter
	 */
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->_remap();
	}
	/**
	 * REMAP IS ON
	 */
	public function _remap()
	{
		
		$this->load->library('parser');
		$this->parser->parse("index.tpl");
	}
	
}