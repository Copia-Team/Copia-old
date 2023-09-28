<?php

class FAQ extends Controller{
    public function index()
    {
        $data['judul'] = 'FAQ';
        $this->view('templates/header', $data);
        $this->view('faq/index');
        $this->view('templates/footer');
    }
}