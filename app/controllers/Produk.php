<?php

class Produk extends Controller {
    public function index(){
        $data['title'] = 'Produk';
        $this->view('template/header', $data);
        $this->view('produk/index');
        $this->view('template/footer');
    }
}