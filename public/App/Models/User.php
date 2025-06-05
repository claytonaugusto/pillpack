<?php

class User{
    private $conn;
    private $table = "users";
    
    public function __construct($db){
        $this->conn = $db;
    }
    
    public function authenticate($username, $password){
        $query = "SELECT * FROM {$this->table} WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user && password_verify($password, $user['password'])){
            return $user;
        }
        
        return false;
    }
}