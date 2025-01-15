<?php

namespace App\services;

use App\model\Model;

class VisualizarService {

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
    public function findById($id): array
    {
        if(empty($id)) return [];

        // Consulta exemplo para obter dados
        $query = "SELECT * FROM users WHERE id = $id";
        
        // Retorna os dados do Model
        return $this->model->query($query);
    }
}