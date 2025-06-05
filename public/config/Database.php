<?php

class Database{
    private $host = "localhost";
    private $dbname = "pillpack";
    private $username = "root";
    private $password = "2004231010"; // Use a secure password in production
    // private $port = "3306"; // Uncomment if you need to specify a port   
    private $conn;
    
    public function connect(){
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
        return $this->conn;
    }
}