<?php
//Function calc of investiments
function calculaInvestimentos($valorInvestido, $taxaJuros, $periodo){
    
    for($i = 1; $i <= $periodo; $i++){
        $valorInvestido += $valorInvestido * $taxaJuros;
       return $valorInvestido;
    }
    
}

$valorInvestido = 1000; 
$taxaJuros = 0.12;
$periodo = 12; 

$result = calculaInvestimentos($valorInvestido, $taxaJuros, $periodo); 

echo "Valor após o período de {$periodo} anos é de: R$ " . number_format($result, 2, ',', '.') . "<br>" . PHP_EOL;


echo "<hr>";

// Function of Fibonacci
function fibonacci ($numero){
    if ($numero <= 1) {
        return $numero;
    }
    return fibonacci($numero - 2) + fibonacci($numero - 1);
}

echo "O oitavo número de Fibonacci é: " . fibonacci(8);