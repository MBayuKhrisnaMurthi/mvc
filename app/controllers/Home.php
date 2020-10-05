<?php

class Home extends Controller {
    public function Index() {
        $data['title'] = 'Dashboard';
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}