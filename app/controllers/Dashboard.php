<?php 

class Dashboard extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('Login_model')->dataUser();
        $this->viewDashboard('templates/dashboard/header', $data);
        $this->viewDashboard('dashboard/home/index', $data);
        $this->viewDashboard('templates/dashboard/footer');
    }
}