<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Exibe a página inicial usando o layout main.php
     */
    public function index()
    {
        // Dados para a view (se precisar de mais, adicione aqui)
        $data = [
            'title' => 'Bem-vindo ao DJT-Vendas'
        ];

        // Chama a view home.php, que deve extender layouts/main
        return view('home', $data);
    }
}
