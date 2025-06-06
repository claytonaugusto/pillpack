<?php

require __DIR__ . "/config/connection_pdo.php";

$vital_date_patient = filter_input(INPUT_POST, 'vital_date_patient', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_date = filter_input(INPUT_POST, 'vital_date_date');
$vital_date_blood_pressure = filter_input(INPUT_POST, 'vital_date_blood_pressure', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_saturation = filter_input(INPUT_POST, 'vital_date_saturation', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_frequency_cardiac = filter_input(INPUT_POST, 'vital_date_frequency_cardiac', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_frequency_respiratory = filter_input(INPUT_POST, 'vital_date_frequency_respiratory', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_temperature = filter_input(INPUT_POST, 'vital_date_temperature', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_blood_glucose = filter_input(INPUT_POST, 'vital_date_blood_glucose', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_blood_aa = filter_input(INPUT_POST, 'vital_date_blood_aa', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_blood_aj = filter_input(INPUT_POST, 'vital_date_blood_aj', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_blood_ad = filter_input(INPUT_POST, 'vital_date_blood_ad', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_evacuation = filter_input(INPUT_POST, 'vital_date_evacuation', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_mic = filter_input(INPUT_POST, 'vital_date_mic', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_responsible = filter_input(INPUT_POST, 'vital_date_responsible', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_action = filter_input(INPUT_POST, 'vital_date_action', FILTER_SANITIZE_SPECIAL_CHARS);
$vital_date_observation = filter_input(INPUT_POST, 'vital_date_observation', FILTER_SANITIZE_SPECIAL_CHARS);

if ($vital_date_patient && $vital_date_date && $vital_date_blood_pressure && $vital_date_saturation && $vital_date_frequency_cardiac && $vital_date_frequency_respiratory && $vital_date_temperature && $vital_date_blood_glucose && $vital_date_blood_aa && $vital_date_blood_aj && $vital_date_blood_ad && $vital_date_evacuation && $vital_date_mic && $vital_date_responsible && $vital_date_action && $vital_date_observation) {
    
        $sql = $pdo->prepare("INSERT INTO vital_date (vital_date_patient, vital_date_date, vital_date_blood_pressure, vital_date_saturation, vital_date_frequency_cardiac, vital_date_frequency_respiratory, vital_date_temperature, vital_date_blood_glucose, vital_date_blood_aa, vital_date_blood_aj, vital_date_blood_ad, vital_date_evacuation, vital_date_mic, vital_date_responsible, vital_date_action, vital_date_observation) VALUES (:vital_date_patient,:vital_date_date, :vital_date_blood_pressure, :vital_date_saturation, :vital_date_frequency_cardiac, :vital_date_frequency_respiratory, :vital_date_temperature, :vital_date_blood_glucose, :vital_date_blood_aa, :vital_date_blood_aj, :vital_date_blood_ad, :vital_date_evacuation, :vital_date_mic, :vital_date_responsible, :vital_date_action, :vital_date_observation)");

        $sql->bindParam(':vital_date_patient', $vital_date_patient);
        $sql->bindParam(':vital_date_date', $vital_date_date);
        $sql->bindParam(':vital_date_blood_pressure', $vital_date_blood_pressure,);
        $sql->bindParam(':vital_date_saturation', $vital_date_saturation);
        $sql->bindParam(':vital_date_frequency_cardiac', $vital_date_frequency_cardiac);
        $sql->bindParam(':vital_date_frequency_respiratory', $vital_date_frequency_respiratory);
        $sql->bindParam(':vital_date_temperature', $vital_date_temperature);
        $sql->bindParam(':vital_date_blood_glucose', $vital_date_blood_glucose);
        $sql->bindParam(':vital_date_blood_aa', $vital_date_blood_aa);
        $sql->bindParam(':vital_date_blood_aj', $vital_date_blood_aj);
        $sql->bindParam(':vital_date_blood_ad', $vital_date_blood_ad);
        $sql->bindParam(':vital_date_evacuation', $vital_date_evacuation);
        $sql->bindParam(':vital_date_mic', $vital_date_mic);
        $sql->bindParam(':vital_date_responsible', $vital_date_responsible);
        $sql->bindParam(':vital_date_action', $vital_date_action);
        $sql->bindParam(':vital_date_observation', $vital_date_observation);
        $sql->execute();

        header("Location: dados-vitais.php");
        exit();
        
    } else {
        header("Location: dashboard.php");
        echo "Erro ao cadastrar os dados vitais. Por favor, tente novamente.";
        exit();
}
