<?php

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('login/index');
    }
}