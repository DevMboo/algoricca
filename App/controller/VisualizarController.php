<?php

namespace App\Controller;

use App\helpers\View;
use App\services\VisualizarService;

class VisualizarController {

    protected $service;

    public function __construct() {
        $this->service = new VisualizarService();
    }

    public function index($param = null)
    {
        $data = [
            'title' => 'Algoricca Teste - Visualizar',
            'items' => $this->service->findById($param)
        ];

        View::render('visualizar.php', $data);
    }
}