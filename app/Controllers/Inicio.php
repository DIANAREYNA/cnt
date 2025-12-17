<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Generalmodel;

class Inicio extends BaseController {

    protected $helpers = ['form'];
        
    public function __construct()
    {   
        $this->model = new Generalmodel();
    }   
        
            
    public function index()
    {
        $datahead['css'] = ['estilo.css'];
        $datafut['js'] = ['inicio.js'];
        echo view('front/header', $datahead);
        echo view('front/inicio');
        echo view('front/footer', $datafut);
    }

    public function temporada()
    {
        $datahead['css'] = ['estilo.css'];
        echo view('front/header', $datahead);
        echo view('front/temporada');
        echo view('front/footer');
    }

    public function prueba()
    {
        $datahead['css'] = ['prueba_funcion.css'];
        $datafut['js'] = ['funcion.js'];
        echo view('front/header', $datahead);
        echo view('front/prueba');
        echo view('front/footer', $datafut);
    }

    public function elenco()
    {
        $datahead['css'] = ['estilo.css', 'elenco.css'];
        $datafut['js'] = ['funcion.js'];
        echo view('front/header', $datahead);
        echo view('front/elenco');
        echo view('front/footer', $datafut);
    }

}