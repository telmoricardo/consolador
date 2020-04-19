<?php

namespace App\Controllers\Site;


use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(){

        $dados = [
            'titulo' => 'Centro Espiríta Consolador',
            'nome' => 'Telmo Ricardo'
        ];

        $template = $this->twig->loadTemplate('site_home.html');
        $template->display($dados);

    }
}