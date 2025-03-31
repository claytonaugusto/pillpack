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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Especialidades</a></h2>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col w-full h-screen">

                    <div class="w-full mt-2.5">
                        <table>
                            <tr>
                                <th>Especialidade</th>
                                <th>Data de cadastro</th>
                                <th>Editar</th>
                            </tr>
                            <tr>
                                <td>Clínica Geral</td>
                                <td>30/03/2025</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Clínica Geral</td>
                                <td>30/03/2025</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Clínica Geral</td>
                                <td>30/03/2025</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Clínica Geral</td>
                                <td>30/03/2025</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Clínica Geral</td>
                                <td>30/03/2025</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            </tr>
                        </table>
                        <?php include __DIR__ . "/templates/pagination.php"; ?>
                    </div>
                </div>


            </div>

        </section>
    </main>
</body>

</html>