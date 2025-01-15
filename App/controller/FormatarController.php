<?php

namespace App\Controller;

use App\helpers\View;
use App\helpers\Common;

class FormatarController {

    public function formated()
    {
        $name = $_POST['txt'] ?? ''; 

        $formatar = Common::formated($name);

        $message = [
            'status' => 'success',
            'txt' => $formatar,
        ];

        $this->index(null, $message);
    }

    public function index($param = null, $message = null)
    {
        // Dados a serem enviados para a view
        $data = [
            'title' => 'Algoricca Teste - Formatar string',
            'message' => $message
        ];

        View::render('formatar.php', $data);
    }

}