<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{	
		$this->load->model('Manajemen_home_model');
		$this->load->model('Manajemen_banner_model');
		$this->load->model('Manajemen_informasi_model');
		
		$data['data_home'] = $this->Manajemen_home_model->getAllData();
		$data['data_banner'] = $this->Manajemen_banner_model->getAllData();
		$data['data_berita'] = $this->Manajemen_informasi_model->getAllHome();

		$this->load->view('templates/header');
		$this->load->view('pages/beranda/index', $data);
		$this->load->view('templates/footer');
	}

	
}
