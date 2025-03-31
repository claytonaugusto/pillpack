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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Vendas</a></h2>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col w-full h-screen">

                    <?php include __DIR__ . "/templates/search.php"; ?>

                    <div class="w-full mt-2.5">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>


            </div>

        </section>
    </main>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                datasets: [{
                    label: 'Qtd. de Vendas',
                    data: [78, 85, 64, 98, 53, 46],
                    fill: false,
                    borderWidth: 3,
                    borderColor: 'rgb(255,117,24)',
                    backgroundColor: 'rgb(251,254,251)',
                    tension: 0.1,
                    pointBorderWidth: 5,
                    pointBackgroundColor: 'rgb(255,117,24)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>