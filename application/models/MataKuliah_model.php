<?php
class MataKuliah_model extends CI_Model{
    // Buat property atau variable
    public $id, $nama, $sks, $kode;

    public function getAll(){
        // menampilkan seluruh data yang ada di table dosen meggunakan query bulder
        $query = $this->db ->get('matakuliah');
        return $query->result();
    }
    public function getById($id){
        // menambahkan data berdasarkan id
        $query = $this->db->get_where('matakuliah', ['id => $id']);
        return $query->row();
    }
}
?>