<?php


class Distribusi extends Controller{
    public function index()
    {
        $data['judul'] = 'Distribusi';
        $this->view('templates/header', $data);
        $this->view('distribusi/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $this->view('distribusi/page');
    }
}