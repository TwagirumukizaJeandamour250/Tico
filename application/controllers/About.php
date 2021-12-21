<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
	}
		public function about_us()
		{
        $this->load->view('layouts/header');
		$this->load->view('layouts/about_us');
		$this->load->view('layouts/footer');
	    }
}