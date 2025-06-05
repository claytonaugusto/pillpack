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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Novos clientes</h2>

                <?php include __DIR__."/components/btn-cadastro-de-clientes.php";?>
                
                
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
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data de cadastro</th>
                                <th>Nível de usuário</th>
                                <th>WhatsApp</th>
                                <th>Status</th>
                                <th>Editar</th>
                            </tr>
                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href=""><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td>Fulano de tal ciclano beltrano</td>
                                <td>fulanodetal@seuemail.com.br</td>
                                <td>30/03/2025</td>
                                <td>Usuário</td>
                                <td><a href="https://wa.me/5531992165055" target="_blank">(37) 99999-9999</a></td>
                                <td>Ativo</td>
                                <td><a href="#"><i class="fa-solid fa-pen"></i></a><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            </tr>
                        </table>
                        <?php include __DIR__ . "/templates/pagination.php"; ?>
                    </div>
                </div>
        <!-- modal de cadastro de clientes -->
        <?php include __DIR__."/components/modal-cadastro-clientes.php";?>


            </div>

        </section>
        <?php require __DIR__ . "/templates/footer.php"; ?>