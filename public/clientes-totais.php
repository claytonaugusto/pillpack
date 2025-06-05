<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection_pdo.php";


$sql = "SELECT patienst_name, patienst_phone_one, patienst_phone_two, patienst_email, patienst_date_of_birth, patienst_status FROM patienst";
$statement = $pdo->query($sql);
$members = $statement->fetchAll();

?>

<body>
<!-- Main -->
<main class="flex w-full h-screen justify-between gap-4 text-(--text-onyx)">
<!-- Asside -->
<?php include __DIR__ . "/templates/aside.php"; ?>
<!-- dashboard -->
<section class="w-full mr-4 ">

<!-- mapa de páginas e botão de cadastro -->
<div class="flex justify-between items-center h-21 w-full mb-5">
<h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Clientes totais</h2>

<?php include __DIR__."/components/btn-cadastro-de-clientes.php";?>

</div>


<!-- dashboard cadastro de usuários -->
<div class="flex flex-wrap justify-start gap-1 w-full">

<div class="flex flex-col w-full">

<div class="w-full flex flex-wrap items-start justify-between mb-2.5 p-0">
<?php include __DIR__ . "/templates/search.php"; ?>
<?php include __DIR__ . "/templates/filter.php"; ?>
</div>

<div class="w-full mt-2.5">
<table>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Data de cadastro</th>
        <!-- <th>Nível de usuário</th> -->
        <th>Telefone 1</th>
        <th>Telefone 2</th>
        <th>Status</th>
        <th>Editar</th>
    </tr>
    <?php foreach($members as $member){?>
        
    <tr>
        <td><?= $member['patienst_name']?></td>
        <td><?= $member['patienst_email']?></td>
        <td>30/03/2025</td>
        <td>Usuário</td>
        <td><a href="https://wa.me/55<?= $member['patienst_phone_one']?>" target="_blank"><?= $member['patienst_phone_one']?></a></td>
        <td><a href="https://wa.me/55<?= $member['patienst_phone_two']?>" target="_blank"><?= $member['patienst_phone_two']?></a></td>
        <td><?= $member['patienst_status']?></td>
        <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>

    </tr>
   <?php };?>


    </tr>
</table>
<?php include __DIR__ . "/templates/pagination.php"; ?>
</div>
</div>
        <!-- modal de cadastro de usuários -->
        <?php include __DIR__."/components/modal-cadastro-clientes.php";?>
</div>

</section>
<?php require __DIR__ . "/templates/footer.php"; ?>