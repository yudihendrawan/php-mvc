<?php 

class Login extends Controller{
     public function index()
     {
          $data['judul'] = 'Data Produk';
          // $data['user'] = $this->model('Login_model')->dataUser();
          // $data['login'] = $this->view('dashboard/login/function');
          // $this->view('templates/dashboard/header', $data);
          $this->view('dashboard/login/index', $data);
     }

     public function masuk()
     {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $row = $this->model('Login_model')->dataUser();
          if( $this->model('Login_model')->User($username, $password) > 0 ) {
               $_SESSION['login'] = true;
               $data['nama'] = $this->model('Login_model')->User($username, $password);
               Flasher::setFlash('berhasil', 'ditambahkan', 'success');
               header('Location: ' . BASEURL . '/dashboard');
               exit;
           } else {
               Flasher::setFlash('gagal', 'ditambahkan', 'danger');
               header('Location: ' . BASEURL . '/login');
               exit;
           }
     }

     public function logout()
     {
          session_start();
          $_SESSION = [];
          session_unset();
          session_destroy();

          header('Location: ' . BASEURL . '/login');
          exit;
     }

     public function registrasi()
     {
          $this->view('dashboard/login/registrasi');
     }

     public function daftar()
     {
          $data['daftar'] = $this->model('Login_model')->registrasi($_POST);
     }

}