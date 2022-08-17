<?php 

class Admin extends Controller {
    public function index()
    {
        $data['nama'] = $this->model('Login_model')->dataUser();
        $data['halaman'] = 'Admin';
        $data['judul'] = 'Daftar Admin';
        $data['admin'] = $this->model('Admin_model')->getAllAdmin();
        $this->viewDashboard('templates/dashboard/header', $data);
        $this->viewDashboard('/dashboard/admin/index', $data);
        $this->viewDashboard('templates/dashboard/footer');
    }

    public function tambah()
    {
        if( $this->model('Admin_model')->tambahDataAdmin($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Admin_model')->hapusDataAdmin($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function getubah()
    {
        // echo 'ok';
        // echo $_POST['id_admin'];
        echo json_encode($this->model('Admin_model')->getAdminById($_POST['id_admin']));
    }

    public function ubah()
    {
        if( $this->model('Admin_model')->ubahDataAdmin($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } 
    }
}