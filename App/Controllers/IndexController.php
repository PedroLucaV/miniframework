<?php

namespace App\Controllers;
use MF\Controller\Action;

class IndexController extends Action{
    public function index(){
        $this->view->dados = ['A', 'B', "C"];
        $this->render('index');
    }

    public function sobreNos(){
        $this->view->dados = ['Cadeira', 'Casa', 'Carro'];
        $this->render('sobreNos');
    }
}