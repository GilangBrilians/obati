<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


	public function index()
	{
		$data['article'] = $this->Model_article->get_article_by_id($id);
		$data['title'] = 'detail';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_detailarticle');
		$this->load->view('template/footer');
	}

}