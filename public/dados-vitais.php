<?php include __DIR__ . "/templates/header.php"; ?>

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
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col w-full h-screen">
                <?php include __DIR__."/templates/search.php"; ?>

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
                                <th>Mic</th>
                                <th>Evac.</th>
                                <th>Respon.</th>
                                <th>Obs.</th>
                                <th>Ação<output></output></th>
                            </tr>
                            <tr>
                                <td>Fulano de tal</td>
                                <td>28/03/25</td>
                                <td>13.8</td>
                                <td>98</td>
                                <td>72</td>
                                <td>100</td>
                                <td>36.5</td>
                                <td>92</td>
                                <td>100</td>
                                <td>99</td>
                                <td>--</td>
                                <td>Sim</td>
                                <td>Clayton</td>
                                <td>Apenas um teste</td>
                                <td>Finalizado</td>
                            </tr>

                            <tr>
                                <td>Fulano de tal</td>
                                <td>28/03/25</td>
                                <td>13.8</td>
                                <td>98</td>
                                <td>72</td>
                                <td>100</td>
                                <td>36.5</td>
                                <td>92</td>
                                <td>100</td>
                                <td>99</td>
                                <td>--</td>
                                <td>Sim</td>
                                <td>Clayton</td>
                                <td>Apenas um teste</td>
                                <td>Finalizado</td>
                            </tr>
                            
                            <tr>
                                <td>Fulano de tal</td>
                                <td>28/03/25</td>
                                <td>13.8</td>
                                <td>98</td>
                                <td>72</td>
                                <td>100</td>
                                <td>36.5</td>
                                <td>92</td>
                                <td>100</td>
                                <td>99</td>
                                <td>--</td>
                                <td>Sim</td>
                                <td>Clayton</td>
                                <td>Apenas um teste</td>
                                <td>Finalizado</td>
                            </tr>
                            
                            <tr>
                                <td>Fulano de tal</td>
                                <td>28/03/25</td>
                                <td>13.8</td>
                                <td>98</td>
                                <td>72</td>
                                <td>100</td>
                                <td>36.5</td>
                                <td>92</td>
                                <td>100</td>
                                <td>99</td>
                                <td>--</td>
                                <td>Sim</td>
                                <td>Clayton</td>
                                <td>Apenas um teste</td>
                                <td>Finalizado</td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>

        </section>
    </main>
</body>

</html>