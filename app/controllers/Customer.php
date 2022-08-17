<?php 

class Customer extends Controller{
     public function index()
     {
          $data['judul'] = 'Data Member' ;
          $data['nama'] = $this->model('Login_model')->dataUser();
          $data['halaman'] ='Member';
          $data['customer'] = $this->model('Customer_model')->getAllCustomer();
          $this->viewDashboard('templates/dashboard/header',$data);
          $this->viewDashboard('dashboard/customer/index',$data);
          $this->viewDashboard('templates/dashboard/footer');
     }

     public function tambah()
     {
         if( $this->model('Customer_model')->tambahCustomer($_POST) > 0 ) {
             Flasher::setFlash('berhasil', 'ditambahkan', 'success');
             header('Location: ' . BASEURL . '/customer');
             exit;
         } else {
             Flasher::setFlash('gagal', 'ditambahkan', 'danger');
             header('Location: ' . BASEURL . '/customer');
             exit;
         }
     }

     public function hapus($id)
     {
         if( $this->model('Customer_model')->hapusCustomer($id) > 0 ) {
             Flasher::setFlash('berhasil', 'dihapus', 'success');
             header('Location: ' . BASEURL . '/customer');
             exit;
         } else {
             Flasher::setFlash('gagal', 'dihapus', 'danger');
             header('Location: ' . BASEURL . '/customer');
             exit;
         }
     }

     public function getubah()
     {
         echo json_encode($this->model('Customer_model')->getCustomerById($_POST['id_customer']));
     }

     public function ubah()
     {
         if( $this->model('Customer_model')->ubahCustomer($_POST) > 0 ) {
             Flasher::setFlash('berhasil', 'diubah', 'success');
             header('Location: ' . BASEURL . '/customer');
             exit;
         } else {
             Flasher::setFlash('gagal', 'diubah', 'danger');
             header('Location: ' . BASEURL . '/customer');
             exit;
         } 
     }
}