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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Farmácias</h2>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col w-full h-screen">

                    <div class="w-full flex flex-wrap items-start justify-between mb-2.5 p-0">
                        <?php include __DIR__ . "/templates/search.php"; ?>
                        <?php include __DIR__ . "/templates/filter.php"; ?>
                    </div>

                    <div class="w-full mt-2.5">
                        <table>
                            <tr>
                                <th>Nome da farmácia</th>
                                <th>Apelido</th>
                                <th>Cidade</th>
                                <th>Bairro</th>
                                <th>Telefones</th>
                                <th>Editar</th>
                            </tr>
                            <tr>
                                <td>Farmelhor</td>
                                <td>Farmelhor Itaúna</td>
                                <td>Itaúna</td>
                                <td>Tropical</td>
                                <td><a href="https://wa.me/5537999699980" target="_blank">(37) 99969-9980</a> | (37) 3201-2004</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Farmelhor</td>
                                <td>Farmelhor Itaúna</td>
                                <td>Itaúna</td>
                                <td>Tropical</td>
                                <td><a href="https://wa.me/5537999699980" target="_blank">(37) 99969-9980</a> | (37) 3201-2004</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Farmelhor</td>
                                <td>Farmelhor Itaúna</td>
                                <td>Itaúna</td>
                                <td>Tropical</td>
                                <td><a href="https://wa.me/5537999699980" target="_blank">(37) 99969-9980</a> | (37) 3201-2004</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>


                            </tr>
                        </table>
                        <?php include __DIR__ . "/templates/pagination.php"; ?>
                    </div>
                </div>


            </div>

        </section>
        <?php require __DIR__ . "/templates/footer.php"; ?>