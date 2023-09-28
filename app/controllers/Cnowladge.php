<?php

class Cnowladge extends Controller{
    public function index()
    {
        $data['judul'] = 'Cnowladge';
        $this->view('templates/header', $data);
        $this->view('cnowladge/index');
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Cnowladge';
        $this->view('templates/header', $data);
        $this->view('cnowladge/page');
        $this->view('templates/footer');
    }
}