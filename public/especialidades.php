<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection.php";

$sql = "SELECT * FROM specialties";
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
<h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Especialidades</h2>
<button id="openSpecialtiesModalButton" class="w-60 bg-(--bg-blue-green) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-blue-green-hover)">
                <i class="fa-solid fa-plus"></i>Cadastrar especialidade
            </button>

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
                <th>Especialidade</th>
                <th>Data de cadastro</th>
                <th>Editar</th>
            </tr>
            <?php
               foreach($members as $member){;?>
            <tr>
                <td><?= $member['specialties_name'];?></td>
                <td><?= $member['specialties_registration_date'];?></td>
                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php };?>
            </tr>
        </table>
        <?php include __DIR__ . "/templates/pagination.php"; ?>
    </div>
</div>


</div>

<?php include __DIR__ . "/components/modal-cadastro-especialidades.php"; ?>

</section>
<?php require __DIR__ . "/templates/footer.php"; ?>