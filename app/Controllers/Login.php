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

    public function exposiciones(){

        $data['titulo'] = 'Exposiciones';

        return view('componentes/nav_view',$data)
        .view('pages/exposiciones')
        .view('componentes/footer_view');
    }

    public function inscripciones(){

        $data['titulo'] = 'Inscripciones';
        $data['css'] = 'inscripciones';
        $data['script'] = 'formulario';

        return view('componentes/nav_view',$data)
        .view('pages/inscripciones')
        .view('componentes/footer_view');
    }
}