<?php 

class Home extends Controller {
    public function index()
    {
        $data ['judul'] = 'Home';
        $data['produk'] = $this->model('Produk_model')->getAllProduk ();
        $this->view('templates/public/header_public', $data);
        $this->view('public/home/index', $data);
        $this->view('templates/public/footer_public');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['produk'] = $this->model('Produk_model')->getProdukById($id);
        $this->view('templates/public/header_public' ,$data);
        $this->view('public/home/detail', $data);
        $this->view('templates/public/footer_public');
    }

}