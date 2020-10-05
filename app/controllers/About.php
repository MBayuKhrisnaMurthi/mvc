<?php
class About extends Controller {
    public function index($name = 'bayu', $age = 23, $hobby = 'trader'){
        $data['name'] = $name;
        $data['age'] = $age;
        $data['hobby'] = $hobby;
        $data['title'] = 'About us';
        $this->view('template/header',$data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
}