<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manajemen_informasi_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = "Manajemen Informasi";
		$data['data_berita'] = $this->Manajemen_informasi_model->getAllData();
		
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('templates/topbar_admin');
		$this->load->view('pages/admin/beranda/informasi', $data);
		$this->load->view('templates/footer_admin');
	}


	public function tambah()
{
    $this->load->library('upload'); // Pastikan library upload dimuat


	if (empty($_FILES['image']['name'])) {
        echo "Tidak ada file yang diunggah!";
        return;
    }
    // Konfigurasi unggahan
    $config['upload_path']   = './uploads/image/'; // Folder penyimpanan
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
    $config['max_size']      = 9048; // Maksimal ukuran file dalam KB (2MB)
    $config['encrypt_name']  = TRUE; // Enkripsi nama file agar unik

    $this->upload->initialize($config);

    if ($this->upload->do_upload('image')) {
        $uploadData = $this->upload->data(); // Ambil data file yang diunggah
        $image = $uploadData['file_name']; // Ambil nama file
    } else {
        $image = ''; // Kosongkan jika tidak ada gambar yang diunggah
    }

    $judul      = $this->input->post('judul', true);
    $deskripsi  = $this->input->post('deskripsi', true);
    $harga      = $this->input->post('harga', true) ?? 0;
    $alamat     = $this->input->post('alamat', true);
    $jam_buka   = $this->input->post('jamBuka', true);
    $jam_tutup  = $this->input->post('jamTutup', true);
    $latitude   = $this->input->post('latitude', true);
    $longitude  = $this->input->post('longitude', true);
    $tgl_update = date('Y-m-d:H:i:s');	

    $data2 = array(
        'judul'      => $judul,
        'deskripsi'  => $deskripsi,
        'image'      => $image, // Menggunakan hasil unggahan
        'harga'      => $harga,
        'alamat'     => $alamat,
        'jam_buka'   => $jam_buka,
        'jam_tutup'  => $jam_tutup,
        'latitude'   => $latitude,
        'longitude'  => $longitude,
        'tgl_update' => $tgl_update,
    );

    $this->db->insert('tbl_manajemen_informasi', $data2);
    redirect('admin/beranda/informasi');
}


// 	public function tambah(){

// 		// echo json_encode($this->input->post());die();
		
// 		$judul = $this->input->post('judul', true);
// 		$deskripsi = $this->input->post('deskripsi', true);
// 		$image = $this->input->post('image', true);
// 		$harga = $this->input->post('harga', true);
// 		$alamat = $this->input->post('alamat', true);
// 		$jam_buka = $this->input->post('jamBuka', true);
// 		$jam_tutup = $this->input->post('jamTutup', true);
// 		$latitude = $this->input->post('latitude', true);
// 		$longitude = $this->input->post('longitude', true);
// 		$tgl_update = $this->input->post('tgl_update', true);

// 		$data2 = array(
// 			'judul' => $judul,
// 			'deskripsi' => $deskripsi,
// 			'image' => $image,
// 			'harga' => $harga ?? 0,
// 			'alamat' => $alamat,
// 			'jam_buka' => $jam_buka,
// 			'jam_tutup' => $jam_tutup,
// 			'latitude' => $latitude,
// 			'longitude' => $longitude,
// 			'tgl_update' => date('Y-m-d'),
// 		);
// // echo json_encode($data2);
// 		// die();

// 		$data['judul'] = "Manajemen Informasi";
// 		$data['data_berita'] = $this->Manajemen_informasi_model->getAllData();


// 		// $this->form_validation->set_rules('judul','Judul', 'required');
// 		// $this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
// 		// $this->form_validation->set_rules('image','Image', 'required');
// 		// $this->form_validation->set_rules('harga','Harga', 'required');
// 		// $this->form_validation->set_rules('alamat','Alamat', 'required');
// 		// // $this->form_validation->set_rules('jam_buka','jamBuka', 'required');
// 		// // $this->form_validation->set_rules('jam_tutup','jamTutup', 'required');
// 		// $this->form_validation->set_rules('latitude','latitude', 'required');
// 		// $this->form_validation->set_rules('longitude','longitude', 'required');
// 		// $this->form_validation->set_rules('tgl_update','tgl_update', 'required');

// 		// if($this->form_validation->run() == FALSE) {

// 			// echo "Gagal";die();
// 			// $this->load->view('templates/header_admin', $data);
// 			// $this->load->view('templates/sidebar_admin');
// 			// $this->load->view('templates/topbar_admin');
// 			// $this->load->view('pages/admin/beranda/informasi', $data);
// 			// $this->load->view('templates/footer_admin');
// 		// }else{

// 		// echo json_encode($data2);	
// 			$this->db->insert('tbl_manajemen_informasi',$data2);
// 			redirect('admin/beranda/informasi');
// 		// }
	// }

	public function hapus($id)
	{
		$this->Manajemen_informasi_model->hapusData($id);
		redirect('admin/beranda/informasi');
	}

	public function ubah($id){
		
		$judul = $this->input->post('judul', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$image = $this->input->post('image', true);
		$harga = $this->input->post('harga', true);
		$alamat = $this->input->post('alamat', true);
		$jam_buka = $this->input->post('jam_buka', true);
		$jam_tutup = $this->input->post('jam_tutup', true);
		$latitude = $this->input->post('latitude', true);
		$longitude = $this->input->post('longitude', true);
		$tgl_update = date('Y-m-d:H:i:s');	

		$data2 = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'image' => $image,
			'harga' => $harga,
			'alamat' => $alamat,
			'jam_buka' => $jam_buka,
			'jam_tutup' => $jam_tutup,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'tgl_update' => $tgl_update,
			);

		// $data['data_home'] = $this->Manajemen_home_model->getAllData();

		$this->Manajemen_informasi_model->ubahData($id,$data2);
		redirect('admin/beranda/informasi', $data2);

		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
		$this->form_validation->set_rules('image','Image', 'required');
		$this->form_validation->set_rules('harga','Harga', 'required');
		$this->form_validation->set_rules('alamat','Alamat', 'required');
		$this->form_validation->set_rules('jam_buka','jam_buka', 'required');
		$this->form_validation->set_rules('jam_tutup','jam_tutup', 'required');
		$this->form_validation->set_rules('latitude','latitude', 'required');
		$this->form_validation->set_rules('longitude','longitude', 'required');
		$this->form_validation->set_rules('tgl_update','tgl_update', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin');
			$this->load->view('templates/topbar_admin');
			$this->load->view('pages/admin/beranda/informasi', $data);
			$this->load->view('templates/footer_admin');
		}else{
		redirect('admin/beranda/informasi', $data2);
			
		}
	}


}
