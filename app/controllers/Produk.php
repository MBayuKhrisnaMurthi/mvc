<?php

class Produk extends Controller {
    public function index(){
        $data['title'] = 'Produk';
        $data['produk'] = $this->model('Produk_model')->getAllProduk();
        $this->view('template/header', $data);
        $this->view('produk/index', $data);
        $this->view('template/footer');
    }
}