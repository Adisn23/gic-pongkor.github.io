<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Review_model');
    }
	public function index()
	{
		
		$this->load->model('Manajemen_informasi_model', 'berita');
		$this->load->helper('functional');
		//load library
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/Geopark_Pongkor/Informasi/index';
		$config['total_rows'] = $this->berita->countBerita();
		$config['per_page'] = 6;

		// style pagination
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center  pagination-sm">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		// initialize config
		$this->pagination->initialize($config);

		// $data['data_berita'] = $this->berita->getAllData();
		$data['start'] = $this->uri->segment(3);
		$data['data_berita'] = $this->berita->getBerita($config['per_page'], $data['start']);


		// echo json_encode($data['data_berita']);die();


		


		$this->load->view('templates/header');
		$this->load->view('pages/informasi/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id){
		$this->load->helper('functional');
		$this->load->model('Manajemen_informasi_model', 'berita');

		$data['detail'] =  $this->berita->getBeritaid($id);
		$data['reviews'] = $this->Review_model->get_reviews($id);

		// echo json_encode($data['detail']);


		$this->load->view('templates/header');
		$this->load->view('pages/informasi/detail',$data);
		$this->load->view('templates/footer');
	}

	public function give_review() {
        $id_user = $this->session->userdata('id');
        $id_wisata = $this->input->post('id_wisata');
        $data = [
            'rating' => $this->input->post('rating'),
            'rating_text' => $this->input->post('text')
        ];

        $existing_review = $this->Review_model->check_review($id_user, $id_wisata);

        if ($existing_review) {
            // Jika review sudah ada, update review
            $this->Review_model->update_review($id_user, $id_wisata, $data);
        } else {
            // Jika review belum ada, tambahkan review baru
            $data['id_user'] = $id_user;
            $data['id_wisata'] = $id_wisata;
            $this->Review_model->insert_review($data);
        }
		
        redirect('Informasi/detail/'.$id_wisata);
    }
}
