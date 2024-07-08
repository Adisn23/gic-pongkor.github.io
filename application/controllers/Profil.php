<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$this->load->model('Visi_misi_model');
		$data['data_visi_misi'] = $this->Visi_misi_model->getAllData();

		$this->load->view('templates/header');
		$this->load->view('pages/profil/index', $data);
		$this->load->view('templates/footer');
	}
}
