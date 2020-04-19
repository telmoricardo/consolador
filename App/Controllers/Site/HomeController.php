<?php

namespace App\Controllers\Site;


use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(){

        $dados = [
            'titulo' => 'O Consolador | Obras Sociais | oconsolador.org.br'

        ];

        $template = $this->twig->loadTemplate('site_home.html');
        $template->display($dados);

    }
}