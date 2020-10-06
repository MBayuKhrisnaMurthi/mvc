<?php

class Produk extends Controller {
    public function index(){
        $this->view('template/header');
        $this->view('produk/index');
        $this->view('template/footer');
    }
}