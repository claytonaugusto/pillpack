<?php
namespace App\Class\User;

class ValidCpf{
    private string $cpf;
    
    public function __construct(string $cpf){
        if(!self::invalidCpf($cpf)){
            throw new \InvalidArgumentException("CPF inválido");
        }
        $this->cpf = $cpf;
    }
    
    public static function invalidCpf(string $cpf): bool{
        // Remove all non-digit characters
        $cpf = preg_replace('/\D/', '', $cpf);
        // Check if the length is 11 digits
        return strlen($cpf) === 11;  
    }
}