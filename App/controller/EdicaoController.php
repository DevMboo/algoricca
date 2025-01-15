<?php

namespace App\Controller;

use App\helpers\View;
use App\helpers\Common;
use App\services\EdicaoService;

class EdicaoController {

    protected $service;

    public function __construct() {
        $this->service = new EdicaoService();
    }

    public function updated()
    {
        if (Common::validateEmail($_POST['email'])) {
            $this->service->updatedUser($_POST);

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
        $data = [
            'title' => 'Algoricca Teste - Editar',
            'items' => $this->service->findById($param),
            'message' => $message
        ];

        View::render('edicao.php', $data);
    }
}