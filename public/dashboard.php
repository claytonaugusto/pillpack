<?php include __DIR__ . "/templates/header.php"; ?>

<body>
    <main class="flex bg-(--bg-baby-powder) w-full h-screen justify-between gap-6 text-(--text-onyx)">

        <!-- Asside -->
        <?php include __DIR__ . "/templates/aside.php"; ?>

        <!-- dashboard -->
        <section class="flex flex-wrap w-full mt-14 m-auto mr-5 ">
            <!-- mapa de páginas e botão de cadastro -->
            <div class="flex justify-between items-center min-h-20 p-1.5 w-full mb-5">
                <h2>Home / <a href="#" class="text-(--bg-btn-hover)">Dashboard</a></h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300"><a href="" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar usuário</a></button>
            </div>

            <!-- dashboard cards -->
            <div class="flex flex-wrap justify-start w-full p-1.5 mt-4 gap-2.5">

                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-btn) rounded-lg cursor-pointer hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold text-(--bg-baby-powder) mb-2">Novos clientes</h2>
                    <h2 class="text-4xl font-bold text-(--bg-baby-powder) mb-2">30</h2>
                </div>


            </div>


        </section>

    </main>
</body>

</html>