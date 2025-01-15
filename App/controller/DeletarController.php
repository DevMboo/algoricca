<?php

namespace App\Controller;

use App\helpers\View;
use App\services\DeletarService;

class DeletarController {

    protected $service;

    public function __construct() {
        $this->service = new DeletarService();
    }

    public function remove()
    {   
        if($_POST['id']) {
            $this->service->delete($_POST['id']); 

            header('Location: /listar');
            exit;
        } 

        $message = [
            "status" => "error",
            "txt" => "Usuário não encontrado..."
        ];

        $this->index(null, $message);

        return;
    }

    public function index($param = null, $message = null)
    {
        $data = [
            'title' => 'Algoricca Teste - Editar',
            'param' => $param,
            'message' => $message
        ];

        View::render('deletar.php', $data);
    }
}