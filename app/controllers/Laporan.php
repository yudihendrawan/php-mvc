<?php 

class Laporan extends Controller {
     public function index()
     {
          $data['judul'] = 'Data Laporan';
          $data['halaman'] = 'Laporan';
          $data['nama'] = $this->model('Login_model')->dataUser();
          $data['laporan'] = $this->model('Laporan_model')->Laporan();
          $data['produk'] = $this->model('Laporan_model')->Produk();
          $data['subtotal'] = $this->model('Laporan_model')->Subtotal();
          $data['subtotalharga'] = $this->model('Laporan_model')->SubtotalHarga();
          $this->view('templates/dashboard/header', $data);
          $this->view('dashboard/laporan/index', $data);
          $this->view('templates/dashboard/footer');
     }

     // public function tanggalLaporan()
     // {    
     //      $data['judul'] = 'Data Laporan';
     //      $data['halaman'] = 'Laporan';
     //      $data['nama'] = $this->model('Login_model')->dataUser();
     //      $data['laporan'] = $this->model('Laporan_model')->Laporan();
     //      $data['produk'] = $this->model('Laporan_model')->Produk();
     //      $data['subtotal'] = $this->model('Laporan_model')->Subtotal();
     //      $data['subtotalharga'] = $this->model('Laporan_model')->SubtotalHarga();
     //      $data['laporandate'] = $this->model('Laporan_model')->LaporanByDate();
     //      $this->view('templates/dashboard/header', $data);
     //      $this->view('dashboard/laporan/index', $data);
     //      $this->view('templates/dashboard/footer');
     // }

     public function laporan_data()
     {
          echo $this->model('Laporan_model')->laporan_data($_POST);
     }

     public function print_laporan()
     {          
          $data['laporan'] = $this->model('Laporan_model')->Laporan();
          $data['produk'] = $this->model('Laporan_model')->Produk();
          $data['subtotal'] = $this->model('Laporan_model')->Subtotal();
          $data['subtotalharga'] = $this->model('Laporan_model')->SubtotalHarga();
          $this->viewDashboard('dashboard/laporan/print_laporan', $data);
     }
     public function print_produk()
     {          
          $data['laporan'] = $this->model('Laporan_model')->Laporan();
          $data['produk'] = $this->model('Laporan_model')->Produk();
          $data['subtotal'] = $this->model('Laporan_model')->Subtotal();
          $data['subtotalharga'] = $this->model('Laporan_model')->SubtotalHarga();
          $this->viewDashboard('dashboard/laporan/print_produk', $data);
     }
}