<?php

namespace App\services;

use App\model\Model;

class CriarService {
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
     * Método exemplo de inserção de dados
     * 
     * @param array $data Dados a serem inseridos
     * @return bool
     */
    public function insertData(array $data): bool
    {
        if(empty($data)) return false;
        
        // Consulta de inserção de dados
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        
        // Retorna a inserção do Model
        return $this->model->execute($query, $data);
    }
}