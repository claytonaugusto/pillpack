<?php

require __DIR__ . "/config/connection_pdo.php";

$vital_date_patient = filter_input(INPUT_POST, 'vital_date_patient', FILTER_SANITIZE_SPECIAL_CHARS);

if ($vital_date_patient && $vital_date_date &&) {
    
        $sql = $pdo->prepare("INSERT INTO vital_date (vital_date_patient, ) VALUES (:vital_date_patient,)");

        $sql->bindParam(':vital_date_patient', $vital_date_patient);
        $sql->execute();

        header("Location: dados-vitais.php");
        exit();
        
    } else {
        header("Location: dashboard.php");
        echo "Erro ao cadastrar os dados vitais. Por favor, tente novamente.";
        exit();
}
