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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="" class="text-(--bg-btn-hover)">Usuários cadastrados</a></h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="cadastro-usuarios.php" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar usuário</a>
                </button>
            </div>

            <!-- dashboard usuarios cadastrados -->
            <div class="flex flex-wrap justify-start gap-1.5">

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

                <a href="#" title="Nome do usuário cadastrado no sistema">
                    <div class="flex flex-col items-center justify-center w-52 h-min p-1 rounded-lg shadow-xl bg-(--bg-baby-powder)">
                        <img class="mb-5 mt-2 rounded-full" src="https://placehold.co/100/png" alt="Nome do usuário" srcset="">
                        <h2 class="text-lg font-bold">Saulo Laranjeiras</h2>
                        <h3 class="text-sm italic">Farmacêutico</h3>
                        <p class="text-(--text-color) mb-2">Status: Ativo</p>
                        <p class="text-(--bg-btn) mb-2">Data de cadastro: 10/10/24</p>
                    </div>
                </a>

            </div>

        </section>
    </main>
</body>

</html>