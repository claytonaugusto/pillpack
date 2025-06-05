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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / Cadastro de O.S</h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar receita</a>
                </button>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col justify-center w-full">
                    <form method="post" action="#" class="flex flex-wrap space-x-2">


                        <label class="ml-1.5" for="">O.S nº</label>
                        <input class="size-full" type="email" name="" id="" title="Número da O.S" value="20250001" disabled>

                        <!-- datas -->
                        <div class="flex flex-wrap w-full justify-between gap-1 mt-1">


                            <div class="w-[49%]">
                                <select class="w-full" name="" id="">
                                    <option value="">Selecione a unidade</option>
                                    <option value="">Farmelhor Avenida</option>
                                    <option value="">Farmelhor Espaço Gera</option>
                                    <option value="">Farmelhor Posto</option>
                                </select>
                            </div>
                            <div class="w-[49%]">
                                <label class="ml-1.5 mr-3" for="">Data O.S</label>
                                <input class="w-[83%]" type="date" name="data" id="data">
                            </div>

                            <div class="w-[49%]">
                                <select class="w-full" name="" id="">
                                    <option value="">Nome do funcionário</option>
                                    <option value="">Saulo Laranjeiras</option>
                                    <option value="">Marcelo Augusto</option>
                                    <option value="">Marlene Matos</option>
                                </select>
                            </div>
                            <input class="w-[49%]" type="tel" name="" id="" placeholder="Número do cupom fiscal">
                            <select class="w-[49%]" name="" id="">
                                <option value="">Nome do cliente</option>
                                <option value="">Augusto Melo</option>
                                <option value="">Hugo Souza</option>
                                <option value="">Memphis Depay</option>
                            </select>
                            <div class="w-[49%]">
                                <label class="ml-1.5 mr-4" for="">Data venda</label>
                                <input class="w-[79%]" type="date" name="data" id="data">
                            </div>
                            
                            <!-- medicamentos especiais -->
<label class="block mb-2">Você usa medicamento especial?</label>
<div class="flex gap-4 mb-4">
<label>
<input type="radio" name="medicamento_especial" value="nao" onchange="toggleCamposEspeciais()" class="mr-1">
Não
</label>
<label>
<input type="radio" name="medicamento_especial" value="sim" onchange="toggleCamposEspeciais()" class="mr-1">
Sim
</label>
</div>

<div id="campos-especiais" class="hidden">
  <label class="block mb-2">
    Nome do Medicamento
    <input type="text" name="nome_medicamento" class="w-full mt-1 p-2 border rounded">
  </label>
  <label class="block mb-2">
    Dose Diária
    <input type="text" name="dose" class="w-full mt-1 p-2 border rounded">
  </label>
</div>
    
    
                            <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Gravar O.S" title="Cadastrar O.S">
                        </div>
                    </form>

                    <div class="flex w-full gap-2">
                        <!-- botão de cadastro de clientes -->
                        <?php include __DIR__ . "/components/btn-cadastro-de-clientes.php"; ?>

                        <button id="openUserModalButton" class="w-60 bg-(--bg-blue-green) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-blue-green-hover)">
                            <i class="fa-solid fa-plus"></i>Cadastrar usuário
                        </button>
                    </div>
                </div>

                <!-- modal de cadastro de clientes -->
                <?php include __DIR__ . "/components/modal-cadastro-clientes.php"; ?>

                <!-- modal de cadastro de usuarios -->
                <?php include __DIR__ . "/components/modal-cadastro-usuario.php"; ?>
            </div>

        </section>
        <?php require __DIR__ . "/templates/footer.php"; ?>