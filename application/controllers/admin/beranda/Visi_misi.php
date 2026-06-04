<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Visi_misi_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = "Manajemen Visi & Misi";
		$data['data_visi_misi'] = $this->Visi_misi_model->getAllData();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('templates/topbar_admin');
		$this->load->view('pages/admin/beranda/visi_misi', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah(){

		
		$visi = $this->input->post('visi', true);
		$misi = $this->input->post('misi', true);

		$data2 = array(
			'visi' => $visi,
			'misi' => $misi
		);

		// echo "<pre>";
		// var_dump($data2);
		// die;

		// echo die($data2);

		$data['judul'] = "Manajemen Visi & Misi";
		$data['data_visi_misi'] = $this->Visi_misi_model->getAllData();


		$this->form_validation->set_rules('visi','Visi', 'required');
		$this->form_validation->set_rules('misi','Misi', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/visi_misi', $data);
			$this->load->view('templates/footer_admin');
		}else{
			$this->Visi_misi_model->tambahData($data2,'tbl_visi_misi');
			redirect('admin/beranda/visi_misi');
		}
	}

	public function hapus($id)
	{
		$this->Visi_misi_model->hapusData($id);
		redirect('admin/beranda/visi_misi');
	}

	public function ubah($id){
		
		$visi = $this->input->post('visi', true);
		$misi = $this->input->post('misi', true);

		$data2 = array(
			'visi' => $visi,
			'misi' => $misi,
			);
		// $data['data_home'] = $this->Manajemen_home_model->getAllData();

		$this->Visi_misi_model->ubahData($id,$data2);
		redirect('admin/beranda/visi_misi', $data2);

		$this->form_validation->set_rules('visi','Visi', 'required');
		$this->form_validation->set_rules('misi','Misi', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/visi_misi', $data);
			$this->load->view('templates/footer_admin');
		}else{
		redirect('admin/beranda/visi_misi', $data2);
			
		}
	}
}