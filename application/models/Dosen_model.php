<?php
class Dosen_model extends CI_Model{
    // Buat property atau variable
    public $id, $nama, $gender, $tmp_lahir, $tgl_lahir, $nidn, $pendidikan;

    public function getAll(){
        // menampilkan seluruh data yang ada di table dosen meggunakan query bulder
        $query = $this->db ->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menambahkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id => $id']);
        return $query->row();
    }
}
?>