<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Team extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
	}
		public function team()
		{
        $this->load->view('layouts/header');
		$this->load->view('layouts/team');
		$this->load->view('layouts/footer');
	    }
}