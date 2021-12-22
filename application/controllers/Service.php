<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
	}
		public function services()
		{
        $this->load->view('includes/header');
		$this->load->view('layouts/services');
		$this->load->view('includes/footer');
	    }
}