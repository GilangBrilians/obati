<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_article extends CI_Controller {


	public function index()
	{
		$this->load->view('view_article');
	}

	public function toLanding() { 
		$this->load->view("view_landing");
		$this->load->view("template/footer");
	}

}