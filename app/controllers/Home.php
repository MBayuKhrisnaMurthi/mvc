<?php

class Home extends Controller {
    public function index() {
        $data['title'] = 'Dashboard';
        $data['name'] = $this->model('User_model')->getName();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}