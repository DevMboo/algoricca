<?php 

namespace App\database;

use PDO;
use PDOException;

class Connection {
    private $host = 'localhost';
    private $dbname = 'algoricca_db';
    private $username = 'root'; // Defina o nome de usuário
    private $password = ''; // Defina a senha
    private $conn;

    /**
     * Construtor da classe que cria a conexão com o banco de dados
     */
    public function __construct()
    {
        try {
            // Cria a conexão PDO
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Configura o PDO para lançar exceções em caso de erro
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // Em caso de erro, lança uma exceção
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    /**
     * Retorna a conexão com o banco de dados
     * 
     * @return PDO
     */
    public function getConnection(): PDO
    {
        return $this->conn;
    }

    /**
     * Fecha a conexão com o banco de dados
     */
    public function closeConnection(): void
    {
        $this->conn = null;
    }

    
}