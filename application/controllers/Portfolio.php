<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Portfolio extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
	}
		public function index()
		{
        $this->load->view('layouts/header');
		$this->load->view('layouts/portfolio');
		$this->load->view('layouts/footer');
	    }
}