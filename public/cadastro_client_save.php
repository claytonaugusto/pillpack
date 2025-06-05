<?php
require __DIR__ . "/config/connection_pdo.php";

$patienst_name = filter_input(INPUT_POST, 'patienst_name', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_email = filter_input(INPUT_POST, 'patienst_email', FILTER_VALIDATE_EMAIL);
$patienst_date_of_register = filter_input(INPUT_POST, 'patienst_date_of_register', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_date_of_birth = filter_input(INPUT_POST, 'patienst_date_of_birth', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_phone_one = filter_input(INPUT_POST, 'patienst_phone_one', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_phone_two = filter_input(INPUT_POST, 'patienst_phone_two', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_sex = filter_input(INPUT_POST, 'patienst_sex', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_status = filter_input(INPUT_POST, 'patienst_status', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_cpf = filter_input(INPUT_POST, 'patienst_cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$patienst_rg = filter_input(INPUT_POST, 'patienst_rg', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$complement = filter_input(INPUT_POST, 'complement', FILTER_SANITIZE_SPECIAL_CHARS);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
$observation = filter_input(INPUT_POST, 'observation', FILTER_SANITIZE_SPECIAL_CHARS);

if ($patienst_name && $patienst_email && $patienst_date_of_register && $patienst_date_of_birth && $patienst_phone_one && $patienst_sex && $patienst_status && $patienst_cpf && $patienst_rg && $cep && $cidade && $rua && $bairro && $uf && $observation) {
        
        $sql = $pdo->prepare("INSERT INTO patienst (patienst_name, patienst_email, patienst_date_of_register, patienst_date_of_birth, patienst_phone_one, patienst_phone_two, patienst_sex, patienst_status, patienst_cpf, patienst_rg, cep, cidade, rua, bairro, complement, uf, observation) VALUES (:patienst_name, :patienst_email, :patienst_date_of_register, :patienst_date_of_birth, :patienst_phone_one, :patienst_phone_two, :patienst_sex, :patienst_status, :patienst_cpf, :patienst_rg, :cep, :cidade, :rua, :bairro, :complement, :uf, :observation)");

        $sql->bindParam(':patienst_name', $patienst_name);
        $sql->bindParam(':patienst_email', $patienst_email);
        $sql->bindParam(':patienst_date_of_register', $patienst_date_of_register);
        $sql->bindParam(':patienst_date_of_birth', $patienst_date_of_birth);
        $sql->bindParam(':patienst_phone_one', $patienst_phone_one);
        $sql->bindParam(':patienst_phone_two', $patienst_phone_two);
        $sql->bindParam(':patienst_sex', $patienst_sex);
        $sql->bindParam(':patienst_status', $patienst_status);
        $sql->bindParam(':patienst_cpf', $patienst_cpf);
        $sql->bindParam(':patienst_rg', $patienst_rg);
        $sql->bindParam(':cep', $cep);
        $sql->bindParam(':cidade', $cidade);
        $sql->bindParam(':rua', $rua);
        $sql->bindParam(':bairro', $bairro);
        $sql->bindParam(':complement', $complement);
        $sql->bindParam(':uf', $uf);
        $sql->bindParam(':observation', $observation);
        $sql->execute();

        header("Location: clientes-totais.php");
        exit();
    }
 else {
    header("Location: dashboard.php");
    exit();
}
