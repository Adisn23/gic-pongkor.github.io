<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

    public function insert_review($data) {
        return $this->db->insert('tbl_rating', $data);
    }

    public function get_reviews($id_wisata) {
        $this->db->select('tbl_rating.*, tb_login.username'); // Select columns you need from both tables
        $this->db->from('tbl_rating');
        $this->db->join('tb_login', 'tbl_rating.id_user = tb_login.id', 'left'); // Perform left join on user_id
        $this->db->where('tbl_rating.id_wisata', $id_wisata); // Filter by id_wisata
        $query = $this->db->get();
        return $query->result_array(); // Return result as array
    }

    public function check_review($id_user, $id_wisata) {
        $this->db->where('id_user', $id_user);
        $this->db->where('id_wisata', $id_wisata);
        $query = $this->db->get('tbl_rating');
        return $query->row_array();
    }

    public function update_review($id_user, $id_wisata, $data) {
        $this->db->where('id_user', $id_user);
        $this->db->where('id_wisata', $id_wisata);
        return $this->db->update('tbl_rating', $data);
    }
}
?>