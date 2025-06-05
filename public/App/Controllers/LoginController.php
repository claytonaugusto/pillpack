<?php

require_once __DIR__ . "../config/Database.php";
require_once __DIR__ . "../models/User.php";

session_start();

class LoginController {
    public function login($username, $password){
        $db = new Database();
        $conn = $db->connect();
        
        $userModel = new User($conn);
        $user = $userModel->authenticate($username, $password);
        
        if($user) {
            $_SESSION['user'] = $user;
            header("Location: /dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Usuário ou senha inválidos.";
            header("Location: /login.php");
            exit();
            
        }
    }
}
