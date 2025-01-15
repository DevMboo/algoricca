<?php

namespace App\services;

use App\model\Model;

class ListarService {

    private $model;

    /**
     * Construtor do serviço
     * 
     * @param Model $model
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * Método exemplo de busca de dados
     * 
     * @return array
     */
    public function getSomeData(): array
    {
        // Consulta exemplo para obter dados
        $query = "SELECT * FROM users";
        
        // Retorna os dados do Model
        return $this->model->query($query);
    }
}