<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection.php";

$sql = "SELECT users_name, user_status, permission, date_entry_system FROM users";
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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Usuários cadastrados</h2>
                <button id="openUserModalButton" class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300 text-(--bg-baby-powder)">
                    <i class="fa-solid fa-plus"></i>Cadastrar usuário
                </button>
            </div>

            <!-- Modal de Cadastro de Usuário -->
                    <?php include __DIR__."/components/modal-cadastro-usuario.php";?>

            <!-- dashboard usuarios cadastrados -->
            <div class="flex flex-wrap justify-start gap-1.5">
                <?php foreach ($members as $member) {
                ?>
                    <a href="#" title="Nome do usuário cadastrado no sistema">
                        <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                            <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                            <h2 class="text-lg font-bold"><?= $member['users_name']; ?></h2>
                            <h3 class="text-sm italic capitalize"><?= $member['permission']; ?></h3>
                            <p class="text-(--text-color) mb-2 capitalize">Status: <?= $member['user_status']; ?></p>
                            <!-- <p class="text-(--bg-btn) mb-2">Data cadastro: <?= $member['date_entry_system']; ?></p> -->

                        </div>
                    </a>
                <?php }; ?>

            </div>

        </section>
        <?php require __DIR__ . "/templates/footer.php"; ?>