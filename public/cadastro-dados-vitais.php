<?php
include __DIR__ . "/templates/header.php";
include __DIR__ . "/config/connection.php";
?>

<body>
    <!-- Main -->
    <main class="flex w-full h-screen justify-between gap-4 text-(--text-onyx)">
        <!-- Asside -->
        <?php include __DIR__ . "/templates/aside.php"; ?>
        <!-- dashboard -->
        <section class="w-full mr-4 ">

            <!-- mapa de páginas e botão de cadastro -->
            <div class="flex justify-between items-center h-21 w-full mb-5">
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Cadastro dados vitais do usuário</a></h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar dados vitais</a>
                </button>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col justify-center w-full">
                    <form method="post" action="cadastro.php" class="flex flex-wrap">

                        <?php include __DIR__ . "/templates/modal.php"; ?>

                        <div class="w-full">
                            <select class="w-full" name="" id="">
                                <option value="">Selecione o paciente</option>
                                <option value="">Marcelo</option>
                                <option value="">Maria</option>
                                <option value="">Joaquim</option>
                                <option value="">Rosa</option>
                                <option value="">Joaquina</option>
                            </select>
                        </div>
                        <!-- datas -->
                        <div class="flex flex-wrap w-full justify-between gap-1 mt-1">
                            <input class="w-[32%]" type="date" name="data" id="data" placeholder="Data de cadastro">
                            <input class="w-[32%]" type="text" name="" id="" placeholder="Pressão Arterial (mmHg)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Saturação (%)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Frequência Cardíaca (bpm)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Frequência Respiratória (irpm)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Temperatura (°C)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Glicose Jejum (mg/DI)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Glicose A.A (mg/DI)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Glicose A.J (mg/DI)">
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Glicose A.D (mg/DI)">
                            <select class="w-[32%]" name="" id="">
                                <option value="">Evacuação</option>
                                <option value="">Sim</option>
                                <option value="">Não</option>
                            </select>
                            <input class="w-[32%]" type="tel" name="" id="" placeholder="Mic">
                            <select class="w-[32%]" name="" id="">
                                <option value="">Responsável</option>
                                <option value="">Funcionário 1</option>
                                <option value="">Funcionário 2</option>
                            </select>
                            <select class="w-[32%]" name="" id="">
                                <option value="">Ação</option>
                                <option value="">O que seria a ação?</option>
                            </select>
                            <textarea class="w-[32%]" name="" id="" placeholder="Observações"></textarea>
                            <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">


                        </div>
                    </form>
                </div>

            </div>

        </section>
    </main>
    <script src="assets/js/modal.js"></script>
</body>

</html>