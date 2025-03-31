<?php include __DIR__ . "/templates/header.php"; ?>

<body>
    <!-- Main -->
    <div class="flex w-full h-screen justify-between gap-4 text-(--text-onyx)">

        <!-- Asside -->
        <?php include __DIR__ . "/templates/aside.php"; ?>
        <!-- dashboard -->
        <section class="w-full mr-4">

            <!-- mapa de páginas e botão de cadastro -->
            <div class="flex justify-between items-center h-21 w-full mb-5">
                <!-- <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Dashboard</a></h2> -->
            </div>

            <!-- dashboard cards -->
            <a href="novos-clientes.php">
                <div class="flex flex-wrap justify-start gap-2">
                    <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                        <h2 class="text-xl font-bold mb-2">Novos clientes</h2>
                        <h2 class="text-4xl font-bold mb-2">30</h2>
                    </div>
            </a>

            <!-- <a href="clientes-totais.php">
                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Clientes totais</h2>
                    <h2 class="text-4xl font-bold mb-2">60</h2>
                </div>
            </a> -->

            <a href="clientes-uso-continuo.php">
                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Clientes uso contínuo</h2>
                    <h2 class="text-4xl font-bold mb-2">26</h2>
                </div>
            </a>

            <a href="receitas-proximas-vencimento.php">
                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2 text-center">Receitas próximas do vencimento</h2>
                    <h2 class="text-4xl font-bold mb-2">13</h2>
                </div>
            </a>

            <a href="farmacias.php">
                <div class="flex flex-col items-center justify-center w-74 h-36 bg-(--bg-yellow-avanti) rounded-lg cursor-pointer text-(--text-prussian-blue) hover:text-(--bg-seasalt) hover:bg-(--bg-btn-hover) duration-300">
                    <h2 class="text-xl font-bold mb-2">Farmácias</h2>
                    <h2 class="text-4xl font-bold mb-2">5</h2>
                </div>
            </a>

    </div>

    </section>
    </main>
</body>

</html>