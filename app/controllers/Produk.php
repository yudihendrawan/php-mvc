<?php 

class Produk extends Controller{
     public function index()
     {  
        $data['nama'] = $this->model('Login_model')->dataUser();
          $data['judul'] = 'Data Produk';
          $data['halaman'] = 'Produk';
          $data['produk'] = $this->model('Produk_model')->getAllProduk ();
        //   $data['produkid'] = $this->model('Produk_model')->getProdukById ($_GET['id_produk']);
          $this->viewDashboard('templates/dashboard/header', $data);
          $this->viewDashboard('/dashboard/produk/index', $data);
          $this->viewDashboard('templates/dashboard/footer');
     }

     public function tambah()
     {
          // var_dump($this->model('Produk_model')->tambahProduk($_POST));
          if( $this->model('Produk_model')->tambahProduk($_POST) > 0 ) {
               Flasher::setFlash('berhasil', 'ditambahkan', 'success');
               header('Location: ' . BASEURL . '/produk');
               exit;
           } else {
               Flasher::setFlash('gagal', 'ditambahkan', 'danger');
               header('Location: ' . BASEURL . '/produk');
               exit;
           }
     }

     public function hapus($id)
     {
         if( $this->model('Produk_model')->hapusProduk($id) > 0 ) {
             Flasher::setFlash('berhasil', 'dihapus', 'success');
             header('Location: ' . BASEURL . '/produk');
             exit;
         } else {
             Flasher::setFlash('gagal', 'dihapus', 'danger');
             header('Location: ' . BASEURL . '/produk');
             exit;
         }
     }
 
     public function getubah()
     {
          // echo 'haii';
      echo json_encode ($this->model('Produk_model')->getProdukById($_POST['id_produk']));
     }
 
     public function ubah()
     {
          // $this->model('Produk_model')->getProdukById($_POST['id_produk']);
          if( $this->model('Produk_model')->ubahProduk($_POST) > 0 ) {
              Flasher::setFlash('berhasil', 'diubah', 'success');
              header('Location: ' . BASEURL . '/produk');
              exit;
            } else {
                // echo PDO::ERRMODE_EXCEPTION;
                
                //   var_dump($this->model('Produk_model')->ubahProduk($_POST));
             Flasher::setFlash('gagal', 'diubah', 'danger');
             header('Location: ' . BASEURL . '/produk');
             exit;
         } 
     }
}