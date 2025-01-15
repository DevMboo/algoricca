<?php

namespace App\model;

use App\database\Connection;

use PDO;
use PDOException;

class Model
{
    protected $db;

    /**
     * Construtor da classe Model
     * Inicializa a conexão com o banco de dados
     */
    public function __construct()
    {
        // Cria a instância da classe Connection
        $this->db = (new Connection())->getConnection();
    }

    /**
     * Método para realizar uma consulta no banco de dados
     * 
     * @param string $query A consulta SQL a ser executada
     * @param array $params Parâmetros para a consulta (opcional)
     * 
     * @return array O resultado da consulta
     */
    public function query(string $query, array $params = []): array
    {
        // Prepara a consulta
        $stmt = $this->db->prepare($query);
        
        // Executa a consulta passando os parâmetros
        $stmt->execute($params);
        
        // Retorna o resultado como um array
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Método para inserir dados no banco de dados
     * 
     * @param string $query A consulta SQL de inserção
     * @param array $params Parâmetros para a consulta de inserção
     * 
     * @return bool Retorna true em caso de sucesso
     */
    public function insert(string $query, array $params): bool
    {
        // Prepara a consulta
        $stmt = $this->db->prepare($query);
        
        // Executa a consulta de inserção
        return $stmt->execute($params);
    }

    /**
     * Método responsável por executar uma consulta SQL com parâmetros
     * 
     * @param string $query
     * @return mixed
     */
    public function execute($query, $params = [])
    {
        $stmt = $this->db->prepare($query);
        
        // Bind dos parâmetros
        foreach ($params as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        
        // Executa a query
        return $stmt->execute();
    }

     /**
     * Método responsável por executar uma consulta SQL sem parâmetros
     * 
     * @param string $query
     * @return mixed
     */
    public function slash($query)
    {
        try {
            // Executa a consulta diretamente
            return $this->db->exec($query);
        } catch (PDOException $e) {
            // Em caso de erro, você pode logar ou lançar uma exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }
}
