<?php
class Sepatu extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-sepatu');
 }
 public function cetak()
 {

 $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
'required|min_length[3]', [
 'required' => 'Nama Pembeli Harus diisi',
 'min_lenght' => 'Nama Pembeli terlalu pendek'
 ]);

 $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
'required|min_length[3]', [
 'required' => 'No. HP Harus diisi',
 'min_lenght' => 'No. HP terlalu pendek'
 ]);

 if ($this->form_validation->run() != true) {
 $this->load->view('view-form-sepatu');
 } else {
   $this->load->model('PriceModel');
   $price = $this->PriceModel->price();
 $data = [
 'kode' => $this->input->post('kode'),
 'nama' => $this->input->post('nama'),
 'merk' => $this->input->post('merk'),
 'harga' => $price,
 'ukuran' => $this->input->post('ukuran')
 ];
 
 $this->load->view('view-data-sepatu', $data);
 }
 }
}