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
                <h2><a href="dashboard.php" class="text-(--bg-btn-hover)">Home</a> / <a href="#" class="text-(--bg-btn-hover)">Cadastro de clientes</a></h2>
                <button class="bg-(--bg-blue-green) p-2.5 w-3xs block cursor-pointer rounded-lg hover:bg-(--bg-blue-green-hover) duration-300">
                    <a href="" class="text-(--bg-baby-powder)"><i class="fa-solid fa-plus"></i>Cadastrar cliente</a>
                </button>
            </div>

            <!-- dashboard cadastro de usuários -->
            <div class="flex flex-wrap justify-start gap-1 w-full">

                <div class="flex flex-col justify-center w-full">
                    <form method="post" action="cadastro.php" class="flex flex-wrap">

                        <?php include __DIR__ . "/templates/modal.php"; ?>

                        <input class="size-full" type="text" name="users_name" id="" title="Digite seu nome completo" placeholder="Nome completo">
                        <input class="size-full" type="email" name="" id="" title="Digite seu e-mail" placeholder="E-mail">
                        <!-- datas -->
                        <div class="flex flex-wrap w-full justify-between gap-1 mt-1">
                            <div class="w-[49%]">
                                <label class="p-1" for="">Data de cadastro</label>
                                <input class="w-full" type="date" name="data" id="data" placeholder="Data de cadastro">
                            </div>
                            <div class="w-[49%]">
                                <label class="p-1" for="">Data de nascimento</label>
                                <input class="w-full" type="date" name="" id="" placeholder="Data de nascimento">
                            </div>
                            <input class="w-[49%]" type="tel" name="" id="" placeholder="Telefone 1">
                            <input class="w-[49%]" type="tel" name="" id="" placeholder="Telefone 2">
                            <select class="w-[49%]" name="" id="">
                                <option value="">Sexo</option>
                                <option value="">Masculino</option>
                                <option value="">Feminino</option>
                                <option value="">Outros</option>
                            </select>
                            <select class="w-[49%]" name="" id="">
                                <option value="">Selecione o status do usuário</option>
                                <option value="">Ativo</option>
                                <option value="">Inativo</option>
                            </select>
                            <input class="w-[49%]" type="text" name="" id="" placeholder="CPF">
                            <input class="w-[49%]" type="text" name="" id="" placeholder="RG ">
                            <input class="w-[49%]" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                                onblur="pesquisacep(this.value);" placeholder="CEP apenas números" />
                            <input class="w-[49%]" type="text" name="cidade" id="cidade" placeholder="Cidade">
                            <input class="size-full" type="text" name="rua" id="rua" placeholder="Endereço">
                            <input class="w-[49%]" type="text" name="bairro" id="bairro" placeholder="Bairro">
                            <input class="w-[49%]" type="text" name="" id="" placeholder="Complemento">
                            <input class="w-[49%]" type="text" name="uf" id="uf" placeholder="Estado">
                            <textarea class="size-full" name="" id="" placeholder="Observações"></textarea>
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