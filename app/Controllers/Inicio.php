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
        echo view('front/header');
        echo view('front/inicio');
        echo view('front/footer');
    }

}