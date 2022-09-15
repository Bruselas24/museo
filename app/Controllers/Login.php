<?php

namespace App\Controllers;

Class Login Extends BaseController
{
    public function index(){

        $data['titulo'] = 'Login';

        return view('componentes/nav_view',$data)
        .view('pages/login').
        view('componentes/footer_view');
    }
}