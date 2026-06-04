<?php 

class Visi_misi_model extends CI_model {
    public function getAllData(){
    return $this->db->get('tbl_visi_misi')->result_array();
    }

    // public function tambahData(){
    //     $data = [
    //         "judul" => $this->input->post('judul', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "image" => $this->input->post('image')
    //     ];

    //     $this->db->insert('tbl_manajemen_home', $data);
    // }

    function tambahData($data,$table){
		$this->db->insert($table,$data);
	}

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_visi_misi');
    }

    public function ubahData($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_visi_misi', $data);
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