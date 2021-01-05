<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Persediaan');
	}
	public function index()
	{
		$result['data'] = $this->Persediaan->displayrecords()->result();
		$this->load->view('templates/header');
		$this->load->view('persediaan',$result);
	}
}
