<?php

namespace App\Class\Address;

class ZipCode{
    private string $zipCode ;

    public function __construct(string $zipCode){
        if(!self::invalidZipCode($zipCode)){
            throw new \InvalidArgumentException("CEP inválido");
        }
        $this->zipCode = $zipCode;
    }
    
    public static function invalidZipCode(string $zipCode): bool{
        // Remove caracters não numéricos
        $zipCode = preg_replace('/\D/', '', $zipCode);
        // Verifica se o tamanho é 8 dígitos
        return strlen($zipCode) === 8;  

    }
}

