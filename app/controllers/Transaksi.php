<?php 

class Transaksi extends Controller{

     public function index()
     {
          $data['judul'] = 'Data Transaksi';
          $data['halaman'] = 'Transaksi';
          $data['nama'] = $this->model('Login_model')->dataUser();
          $data['penjualan'] = $this->model('Transaksi_model')->getAllTransaksi ();
          $data['customer'] = $this->model('Customer_model')->getAllCustomer();
          $data['produk'] = $this->model('Produk_model')->getAllProduk ();
          $data['promo'] =$this->model('Promo_model')->getAllPromo();
          $this->viewDashboard('templates/dashboard/header', $data);
          $this->viewDashboard('dashboard/transaksi/index', $data);
          $this->viewDashboard('templates/dashboard/footer');
     }

     public function tambah()
     {
         if( $this->model('Transaksi_model')->tambahTransaksi($_POST) > 0 ) {
             Flasher::setFlash('berhasil', 'ditambahkan', 'success');
             header('Location: ' . BASEURL . '/transaksi');
             exit;
         } else {
             Flasher::setFlash('gagal', 'ditambahkan', 'danger');
             header('Location: ' . BASEURL . '/transaksi');
             exit;
         }
     }

     public function hapus($id)
     {
         if( $this->model('Transaksi_model')->hapusTransaksi($id) > 0 ) {
             Flasher::setFlash('berhasil', 'dihapus', 'success');
             header('Location: ' . BASEURL . '/transaksi');
             exit;
         } else {
             Flasher::setFlash('gagal', 'dihapus', 'danger');
             header('Location: ' . BASEURL . '/transaksi');
             exit;
         }
     }

     public function getubah()
     {
         echo json_encode($this->model('Transaksi_model')->getTransaksiById($_POST['id_transaksi']));
     }

}