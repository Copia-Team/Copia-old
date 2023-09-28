<?php

class Kalkulator extends Controller{
    public function index()
    {
        $data['judul'] = 'Kalkulator';
        $this->view('templates/header', $data);
        $this->view('kalkulator/index');
        $this->view('templates/footer');
    }
}