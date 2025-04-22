<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection.php";

$sql = "SELECT 
              vital_date_date,
              vital_date_blood_pressure,
              vital_date_saturation,
              vital_date_frequency_cardiac,
              vital_date_frequency_respiratory,
              vital_date_temperature,
              vital_date_fast_blood_glucose,
              vital_date_fast_blood_aa,
              vital_date_fast_blood_aj,
              vital_date_fast_blood_ad,
              vital_date_mic,
              vital_date_evacuation,
              vital_date_responsible,
              vital_date_action,
              vital_date_observation
         FROM vital_date";
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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Dados vitais dos pacientes</a></h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="cadastro-dados-vitais.php" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar dados vitais</a>
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
                                <th>Data</th>
                                <th>P.Arterial<br>(mmHg)</th>
                                <th>Saturação<br>(%)</th>
                                <th>F.Card<br>(bpm)</th>
                                <th>F.Resp<br>(irpm)</th>
                                <th>Temperat.<br>(°C)</th>
                                <th>Glic.Jejum<br>(mg/DI)</th>
                                <th>Glic.A.A<br>(mg/DI)</th>
                                <th>Glic.A.J<br>(mg/DI)</th>
                                <th>Glic.A.D<br>(mg/DI)</th>
                                <th>Evac.</th>
                                <th>Mic</th>
                                <th>Respon.</th>
                                <th>Obs.</th>
                                <th>Ação<output></output></th>
                            </tr>
                            <?php foreach ($members as $member) { ?>
                                <tr>
                                    <td>Fulano de Tal</td>
                                    <td><?= $member['vital_date_date']; ?></td>
                                    <td><?= $member['vital_date_blood_pressure']; ?></td>
                                    <td><?= $member['vital_date_saturation']; ?></td>
                                    <td><?= $member['vital_date_frequency_cardiac']; ?></td>
                                    <td><?= $member['vital_date_frequency_respiratory']; ?></td>
                                    <td><?= $member['vital_date_temperature']; ?></td>
                                    <td><?= $member['vital_date_fast_blood_glucose']; ?></td>
                                    <td><?= $member['vital_date_fast_blood_aa']; ?></td>
                                    <td><?= $member['vital_date_fast_blood_aj']; ?></td>
                                    <td><?= $member['vital_date_fast_blood_ad']; ?></td>
                                    <td><?= $member['vital_date_evacuation']; ?></td>
                                    <td><?= $member['vital_date_mic']; ?></td>
                                    <td><?= $member['vital_date_responsible']; ?></td>
                                    <td><?= $member['vital_date_observation']; ?></td>
                                    <td class="capitalize"><?= $member['vital_date_action']; ?></td>
                                </tr>
                            <?php }; ?>
                        </table>
                    </div>
                </div>


            </div>

        </section>
    </main>
</body>

</html>