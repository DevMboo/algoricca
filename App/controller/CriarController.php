<?php

namespace App\Controller;

use App\helpers\View;
use App\helpers\Common;
use App\services\CriarService;

class CriarController {

    protected $service;

    public function __construct() {
        $this->service = new CriarService();
    }

    public function store()
    {
        if (Common::validateEmail($_POST['email'])) {
            $this->service->insertData($_POST);

            header('Location: /listar');
            exit;
        }

        $message = [
            "status" => "error",
            "txt" => "E-mail inserido inválido"
        ];

        $this->index(null, $message);

        return;
    }
    
    public function index($param = null, $message = null)
    {
        // Dados a serem enviados para a view
        $data = [
            'title' => 'Algoricca Teste - Criar',
            'items' => ['Item 1', 'Item 2', 'Item 3'],
            'param' => $param,
            'message' => $message
        ];

        // Chama o método render da classe View
        View::render('criar.php', $data);
    }
}