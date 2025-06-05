<!-- incluir div do modal -->
<div id="userModal" class="user-modal">
    <div class="user-modal-content">
        <span id="closeUserModalButton" class="user-close">&times;</span>

        <h2>Cadastrar novo usuário</h2>

        <!-- dashboard cadastro de usuários -->
        <form method="post" action="cadastro.php" class="flex flex-wrap">
            <div class="file-input-wrapper">
                <div class="flex items-center w-full text-center">
                    <!-- Avatar da página de cadastro de usuários -->
                    <img src="https://placehold.co/100/png " alt="Avatar do usuário" title="Avatar do usuário" srcset="" />
                    <div class="flex items-center justify-center content-center -m-6 z-3 ">
                        <form action="#">
                            <input type="file" name="" id="">
                        </form>
                    </div>
                    </img>
                </div>
            </div>

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
                <select class="w-[49%]" name="" id="">
                    <option value="">Nível do usuário</option>
                    <option value="">Administrador</option>
                    <option value="">Farmacêutico</option>
                    <option value="">Vendedor</option>
                    <option value="">Usuário</option>
                </select>
                <input class="w-[49%]" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                    onblur="pesquisacep(this.value);" placeholder="CEP apenas números" />
                <input class="size-full" type="text" name="rua" id="rua" placeholder="Endereço">
                <input class="w-[49%]" type="text" name="bairro" id="bairro" placeholder="Bairro">
                <input class="w-[49%]" type="text" name="cidade" id="cidade" placeholder="Cidade">
                <input class="w-[49%]" type="text" name="complement" id="complement" placeholder="Complemento">
                <input class="w-[49%]" type="text" name="uf" id="uf" placeholder="Estado">
                <textarea class="size-full" name="" id="" placeholder="Observações"></textarea>
                <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">
            </div>
        </form>

        <!-- fechar div do modal -->
    </div>
</div>