<?php

namespace App\services;

use App\model\Model;

class DeletarService {

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
     * Método responsável por deletar
     * 
     * @return bool
     */
    public function delete($id): bool
    {
        if (empty($id)) return false;

        // Consulta DELETE usando exec
        $query = "DELETE FROM users WHERE id = $id";

        // Executa a consulta
        return $this->model->slash($query);
    }


}