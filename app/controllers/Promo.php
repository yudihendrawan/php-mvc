<?php 

class Promo extends Controller{
     public function index()
     {
          $data['nama'] = $this->model('Login_model')->dataUser();
          $data['judul'] = 'Data Promo';
          $data['halaman'] = 'Promo';
          $data['promo'] = $this->model('Promo_model')->getAllPromo();
          $this->viewDashboard('templates/dashboard/header', $data);
          $this->viewDashboard('/dashboard/promo/index', $data);
          $this->viewDashboard('templates/dashboard/footer');
     }

     public function tambah()
     {
          if( $this->model('Promo_model')->tambahPromo($_POST) > 0 ) {
               Flasher::setFlash('berhasil', 'ditambahkan', 'success');
               header('Location: ' . BASEURL . '/promo');
               exit;
           } else {
               Flasher::setFlash('gagal', 'ditambahkan', 'danger');
               header('Location: ' . BASEURL . '/promo');
               exit;
           }
     }

     public function getubah()
     {
      echo json_encode ($this->model('Promo_model')->getPromoById($_POST['id_promo']));
     }

     public function ubah()
     {
          if( $this->model('Promo_model')->ubahPromo($_POST) > 0 ) {
               Flasher::setFlash('berhasil', 'diubah', 'success');
               header('Location: ' . BASEURL . '/promo');
               exit;
           } else {
               Flasher::setFlash('gagal', 'diubah', 'danger');
               header('Location: ' . BASEURL . '/promo');
               exit;
           } 
     }

     public function hapus($id)
     {
         if( $this->model('Promo_model')->hapusPromo($id) > 0 ) {
             Flasher::setFlash('berhasil', 'dihapus', 'success');
             header('Location: ' . BASEURL . '/promo');
             exit;
         } else {
             Flasher::setFlash('gagal', 'dihapus', 'danger');
             header('Location: ' . BASEURL . '/promo');
             exit;
         }
     }
}