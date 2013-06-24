<?php

/**
 * Classe de conexão da base de dados
 */
class Database
{

    /**
     * Armazena a conexão PDO
     * @var PDO
     */
    private $conn;

    /**
     * Método construtor
     * @see http://php.net/manual/pt_BR/class.pdo.php
     * @see http://php.net/manual/pt_BR/pdo.error-handling.php
     */
    public function __construct()
    {
        try {
            // Conexão MySQL
            // $this->conn = new PDO('mysql:host=localhost;dbname=test', 'usuario', 'senha');
            
            // Conexão de tests no sqlite
            $this->conn = new PDO('sqlite::memory:', null, null, array(PDO::ATTR_PERSISTENT => 1));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    /**
     * Recupera a conexão PDO
     * @return PDO
     */
    public function getConexao()
    {
        return $this->conn;
    }
}