<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->model('Model_article');
		
	}

	public function index() { 
		$data['article'] = $this->Model_article->get_article();
		$data['title'] = 'article';

		

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_article', $data);
		$this->load->view("template/footer");

	}


		

	}


