<?php 

class Product extends Controller {
    public function index()
    {
        $data['judul'] = 'Product';
        $data['produk'] = $this->model('Produk_model')->getAllProduk ();
        $this->view('templates/public/header_public', $data);
        $this->view('public/product/index', $data);
        $this->view('templates/public/footer_public');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['produk'] = $this->model('Produk_model')->getProdukById($id);
        $this->view('templates/public/header_public' ,$data);
        $this->view('public/product/detail', $data);
        $this->view('templates/public/footer_public');
    }

}