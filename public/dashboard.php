<?php include __DIR__ . "/templates/header.php"; ?>
<body>
    <!-- Main -->
    <main class="flex w-full h-screen justify-between gap-4 text-(--text-onyx)">
        <!-- Asside -->
        <?php include __DIR__ ."/templates/aside.php";?>
        <!-- dashboard -->
        <section class="w-full mr-4 ">
            
            <!-- mapa de páginas e botão de cadastro -->
            <div class="flex justify-between items-center h-21 w-full mb-5">
                <h2>Home / <a href="#" class="text-(--bg-btn-hover)">Dashboard</a></h2>
                <!-- <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar usuário</a>
                </button> -->
            </div>

            <!-- dashboard cards -->
            <div class="flex flex-wrap justify-start gap-1">
                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Novos clientes</h2>
                    <h2 class="text-4xl font-bold mb-2">30</h2>
                </div>

                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Clientes totais</h2>
                    <h2 class="text-4xl font-bold mb-2">60</h2>
                </div>

                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Clientes uso contínuo</h2>
                    <h2 class="text-4xl font-bold mb-2">26</h2>
                </div>

                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2 text-center">Receitas próximas do vencimento</h2>
                    <h2 class="text-4xl font-bold mb-2">13</h2>
                </div>

                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">ILPI's</h2>
                    <h2 class="text-4xl font-bold mb-2">12</h2>
                </div>

            </div>


        </section>
    </main>
</body>

</html>