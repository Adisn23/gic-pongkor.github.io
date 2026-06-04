<?php 
class Manajemen_informasi_model extends CI_model {
    public function getAllData(){
    return $this->db->get('tbl_manajemen_informasi')->result_array();
    }

    public function getAllHome(){
        return $this->db->select('*')->from('tbl_manajemen_informasi')->limit(5)->get()->result_array();
    }

    // public function tambahData(){
    //     $data = [
    //         "judul" => $this->input->post('judul', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "image" => $this->input->post('image')
    //     ];

    //     $this->db->insert('tbl_manajemen_home', $data);
    // }

    function tambahData($id, $data){
		$this->db->insert('tbl_manajemen_informasi', $data);
    //     protected $table = 'tbl_manajemen_berita';
    //     protected $primaryKey = 'id_berita';
    //     protected $allowedFields = [
    //     'judul', 'deskripsi', 'image', 'harga', 'alamat', 
    //     'jam_buka', 'jam_tutup', 'latitude', 'longitude', 'tgl_update'
    // ];
	}

    public function hapusData($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('tbl_manajemen_informasi');
    }

    public function ubahData($id, $data)
	{
		$this->db->where('id_berita', $id);
		$this->db->update('tbl_manajemen_informasi', $data);
	}

    public function getBerita($limit, $start)
    {
    //    return $this->db->get('tbl_manajemen_berita', $limit, $start)->result_array();


$this->db->select('*,AVG(tbl_rating.rating) AS avg_rating'); // Select all columns from both tables
$this->db->from('tbl_manajemen_informasi'); // Main table
$this->db->join('tbl_rating', 'tbl_manajemen_informasi.id_berita = tbl_rating.id_wisata', 'left')->group_by('tbl_manajemen_informasi.id_berita')
; // Join condition

// Add limit and start parameters
$this->db->limit($limit, $start);

// Execute the query and get results as an array
$results = $this->db->get()->result_array();

return $results;
    }

    public function getBeritaid($id){

        return $this->db->select('*,AVG(tbl_rating.rating) AS avg_rating')->from('tbl_manajemen_informasi')->where('id_berita',$id)->join('tbl_rating', 'tbl_manajemen_informasi.id_berita = tbl_rating.id_wisata', 'left')->group_by('tbl_manajemen_informasi.id_berita')
        ->get()->row_array();

    }

    public function countBerita()
    {
        return $this->db->get('tbl_manajemen_informasi')->num_rows();
    }


    // public function ubahData(){
    //     $data = [
    //         "judul" => $this->input->post('judul', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "image" => $this->input->post('image')
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('tbl_manajemen_home', $data);
    // }

}