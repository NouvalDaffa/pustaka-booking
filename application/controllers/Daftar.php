<?php
class Daftar extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-daftar');
 }
 public function cetak()
 {

 $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
'required|min_length[3]', [
 'required' => 'NIM harus diisi',
 'min_lenght' => 'NIM terlalu pendek'
 ]);

 $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
'required|min_length[3]', [
 'required' => 'Nama harus diisi',
 'min_lenght' => 'Nama terlalu pendek'
 ]);

 $this->form_validation->set_rules('tanggal', 'Nama Matakuliah', 
'required|min_length[3]', [
 'required' => 'Tanggal Lahir harus dipilih',
 'min_lenght' => 'Tanggal Lahir error'
 ]);

 $this->form_validation->set_rules('tempat', 'tempat Matakuliah', 
 'required|min_length[3]', [
  'required' => 'Tempat Lahir harus diisi',
  'min_lenght' => 'Tempat Lahir terlalu pendek'
  ]);

  $this->form_validation->set_rules('alamat', 'alamat Matakuliah', 
  'required|min_length[3]', [
   'required' => 'Alamat harus diisi',
   'min_lenght' => 'Alamat terlalu pendek'
   ]);

 if ($this->form_validation->run() != true) {
 $this->load->view('view-form-daftar');
 } else {
 $data = [
 'kode' => $this->input->post('kode'),
 'nama' => $this->input->post('nama'),
 'tanggal' => $this->input->post('tanggal'),
 'tempat' => $this->input->post('tempat'),
 'alamat' => $this->input->post('alamat')
 ];
 
 $this->load->view('view-data-daftar', $data);
 }
 }
}