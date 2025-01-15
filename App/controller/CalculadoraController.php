<?php

namespace App\Controller;

use App\helpers\View;
use App\helpers\Common;

class CalculadoraController {

    public function calculate()
    {
        $a = $_POST['a'] ?? 0; 
        $b = $_POST['b'] ?? 0; 
        $type = $_POST['type'] ?? 'sum';

        $calc = Common::calculate($type, $a, $b);

        $message = [
            'status' => 'success',
            'txt' => $calc,
            'a' => $a,
            'b' => $b,
        ];

        $this->index(null, $message);
    }

    public function index($param = null, $message = null)
    {
        // Dados a serem enviados para a view
        $data = [
            'title' => 'Algoricca Teste - Calculadora refatorada',
            'message' => $message
        ];

        // Chama o método render da classe View
        View::render('calculadora.php', $data);
    }

}