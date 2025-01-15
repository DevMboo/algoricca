<?php

namespace App\Controller;

use App\helpers\View;
use App\services\ListarService;

class ListarController {

    protected $service;

    public function __construct() {
        $this->service = new ListarService();
    }

    public function index($param = null)
    {
        // Dados a serem enviados para a view
        $data = [
            'title' => 'Algoricca Teste - Listar',
            'items' => $this->service->getSomeData()
        ];

        // Chama o método render da classe View
        View::render('listar.php', $data);
    }
}