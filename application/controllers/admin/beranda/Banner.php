<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manajemen_banner_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = "Manajemen Banner";
		$data['data_banner'] = $this->Manajemen_banner_model->getAllData();
		
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('templates/topbar_admin');
		$this->load->view('pages/admin/beranda/banner', $data);
		$this->load->view('templates/footer_admin');
	}

	// public function tambah()
	// {
	// 	$data['data_home'] = $this->Manajemen_home_model->getAllData();
	// 	$this->form_validation->set_rules('judul','Judul', 'required');
	// 	$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
	// 	$this->form_validation->set_rules('image','Image', 'required');

		// if($this->form_validation->run() == FALSE) {
		// 	$this->load->view('templates/header_admin', $data);
		// 	$this->load->view('templates/sidebar_admin');
		// 	$this->load->view('templates/topbar_admin');
		// 	$this->load->view('pages/admin/beranda/home', $data);
		// 	$this->load->view('templates/footer_admin');
		// }else{
		// 	$this->Manajemen_home_model->tambahData();
		// 	redirect('admin/beranda/home');
		// }
	// }


	public function tambah(){
		
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$image = $this->input->post('image', true);
 
		$data2 = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'image' => $image,
		);

		$data['judul'] = "Manajemen Banner";
		$data['data_banner'] = $this->Manajemen_banner_model->getAllData();


		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
		$this->form_validation->set_rules('image','Image', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/banner', $data);
			$this->load->view('templates/footer_admin');
		}else{
			$this->Manajemen_banner_model->tambahData($data2,'tbl_manajemen_banner');
			redirect('admin/beranda/banner');
		}
	}

	public function hapus($id)
	{
		$this->Manajemen_banner_model->hapusData($id);
		redirect('admin/beranda/banner');
	}

	public function ubah($id){
		
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$image = $this->input->post('image', true);
 
		$data2 = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'image' => $image,
			);

		// $data['data_home'] = $this->Manajemen_home_model->getAllData();

		$this->Manajemen_banner_model->ubahData($id,$data2);
		redirect('admin/beranda/banner', $data2);

		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
		$this->form_validation->set_rules('image','Image', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/home', $data);
			$this->load->view('templates/footer_admin');
		}else{
		redirect('admin/beranda/banner', $data2);
			
		}
	}


}
