<?php
class MataKuliah extends CI_Controller{
    // membuat method index
    public function index(){
         // akses model matakuliah
         $this->load->model('matakuliah_model');
         $matakuliah = $this->matakuliah_model->getAll();
         $data['matakuliah'] = $matakuliah;
         // render data dan kirim data ke dalam view
         $this->load->view('layouts/header');
         $this->load->view('matakuliah/index', $data);
         $this->load->view('layouts/footer');
     }
     public function detail($id){
         // akses model matakuliah
         $this->load->model('matakuliah_model');
         $siswa = $this->mahasiswa_model->getById($id);
         $data['siswa'] = $siswa;
         $this->load->view('layouts/header');
         $this->load->view('mahasiswa/detail', $data);
         $this->load->view('layouts/footer');
     }
}
?>