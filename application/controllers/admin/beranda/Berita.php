<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manajemen_berita_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = "Manajemen Informasi";
		$data['data_berita'] = $this->Manajemen_berita_model->getAllData();
		
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('templates/topbar_admin');
		$this->load->view('pages/admin/beranda/berita', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah(){
		
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$image = $this->input->post('image', true);
		$tgl_update = $this->input->post('tgl_update', true);
 
		$data2 = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'image' => $image,
			'tgl_update' => $tgl_update,
		);

		$data['judul'] = "Manajemen Berita";
		$data['data_berita'] = $this->Manajemen_berita_model->getAllData();


		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
		$this->form_validation->set_rules('image','Image', 'required');
		$this->form_validation->set_rules('tgl_update','tgl_update', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/berita', $data);
			$this->load->view('templates/footer_admin');
		}else{
			$this->Manajemen_berita_model->tambahData($data2,'tbl_manajemen_berita');
			redirect('admin/beranda/berita');
		}
	}

	public function hapus($id)
	{
		$this->Manajemen_berita_model->hapusData($id);
		redirect('admin/beranda/berita');
	}

	public function ubah($id){
		
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$image = $this->input->post('image', true);
		$tgl_update = $this->input->post('tgl_update', true);
 
		$data2 = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'image' => $image,
			'tgl_update' => $tgl_update,
			);

		// $data['data_home'] = $this->Manajemen_home_model->getAllData();

		$this->Manajemen_berita_model->ubahData($id,$data2);
		redirect('admin/beranda/berita', $data2);

		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
		$this->form_validation->set_rules('image','Image', 'required');
		$this->form_validation->set_rules('tgl_update','tgl_update', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/berita', $data);
			$this->load->view('templates/footer_admin');
		}else{
		redirect('admin/beranda/berita', $data2);
			
		}
	}


}
