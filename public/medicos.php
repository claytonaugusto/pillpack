<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection.php";

$sql = "SELECT * FROM doctors";
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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Médicos</h2>
                <button id="openMedicalModalButton" class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300 text-(--bg-baby-powder)">
                    <i class="fa-solid fa-plus"></i>Cadastrar médico
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
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Especialidade</th>
                                <th>CRM</th>
                                <th>Data de cadastro</th>
                                <th>Telefone 1</th>
                                <th>Telefone 2</th>
                                <th>Editar</th>
                            </tr>
                            <?php 
                                foreach($members as $member)
                                {?>
                                    
                            <tr>
                                <td><?= $member['doctors_name'];?></td>
                                <td><?= $member['doctors_email'];?></td>
                                <td><?= $member['doctors_specialty'];?></td>
                                <td><?= $member['doctors_crm'];?></td>
                                <td><?= $member['doctors_resgistration_date'];?></td>
                                <td><a href="https://wa.me/55<?= $member['doctors_phone'];?>" target="_blank"><?= $member['doctors_phone'];?></a></td>
                                <td><a href="https://wa.me/55<?= $member['doctors_phone'];?>" target="_blank"><?= $member['doctors_phone'];?></a></td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                                <?php };?>
                            </tr>
                        </table>
                        <?php include __DIR__ . "/templates/pagination.php"; ?>
                    </div>
                </div>
                
<?php include __DIR__ . "/components/modal-cadastro-medicos.php"; ?>

            </div>

        </section>
        <?php require __DIR__ . "/templates/footer.php"; ?>