<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
	}
		public function contact_us()
		{
        $this->load->view('includes/header');
		$this->load->view('layouts/contact_us');
		$this->load->view('includes/footer');
	    }
}