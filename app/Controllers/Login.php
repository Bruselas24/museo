<?php

namespace App\Controllers;

Class Login Extends BaseController
{
    public function index(){

        $data['titulo'] = 'Login';
        $data['css'] = 'login';

        return view('componentes/nav_view',$data)
        .view('pages/login').
        view('componentes/footer_view');
    }

    public function inicio(){

        $data['titulo'] = 'Inicio';
        $data['css'] = 'inicio';

        return view('componentes/nav_view',$data)
        .view('pages/inicio')
        .view('componentes/footer_view');
    }
}