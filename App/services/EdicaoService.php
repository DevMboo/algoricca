<?php

namespace App\services;

use App\model\Model;

class EdicaoService {

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

    /**
     * Método responsável pela edição do registro do usuário
     * 
     * @return bool
     */
    public function updatedUser($data)
    {
        // Consulta SQL para atualizar o usuário
        $query = "UPDATE users SET email = :email, name = :name WHERE id = :id";

        // Executa a consulta de atualização
        return $this->model->execute($query, [
            'email' => $data['email'],
            'name' => $data['name'],
            'id' => $data['id']  // Assegure-se de que o ID está sendo passado no $data
        ]);
    }
}