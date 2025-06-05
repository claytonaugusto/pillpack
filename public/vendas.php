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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Vendas</h2>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col w-full">

                <div class="w-full flex flex-wrap items-start justify-between mb-2.5 p-0">
                        <?php include __DIR__ . "/templates/search.php"; ?>
                        <?php include __DIR__ . "/templates/filter.php"; ?>
                    </div>

                    <div class="w-full mt-2.5">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>


            </div>

        </section>
<?php require __DIR__ . "/templates/footer.php"; ?>