<!-- Incluir div modal -->
<div id="newModal" class="new-modal">
  <div class="new-modal-content">
    <span id="closeNewModalBtn" class="new-close">&times;</span>

        <h2>Cadastrar novo cliente</h2>
        <!-- Dashboar de cadastro de clientes -->
        <form method="post" action="cadastro_client_save.php" class="flex flex-wrap">
           
            <input class="size-full" type="text" name="patienst_name" title="Digite seu nome completo" placeholder="Nome completo">
            
            <input class="size-full" type="email" name="patienst_email"title="Digite seu e-mail" placeholder="E-mail">
            
            <!-- datas -->
            <div class="flex flex-wrap w-full justify-between gap-1 mt-1">
                <div class="w-[49%]">
                    <label class="p-1" for="">Data de cadastro</label>
                    <input class="w-full" type="date" name="patienst_date_of_register" placeholder="Data de cadastro">
                </div>
                <div class="w-[49%]">
                    <label class="p-1" for="">Data de nascimento</label>
                    <input class="w-full" type="date" name="patienst_date_of_birth" placeholder="Data de nascimento">
                </div>
                <input class="w-[49%]" type="tel" name="patienst_phone_one" placeholder="Telefone 1">
                <input class="w-[49%]" type="tel" name="patienst_phone_two" placeholder="Telefone 2">
                <select class="w-[49%]" name="patienst_sex">
                    <option value="">Sexo</option>
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                    <option value="o">Outros</option>
                </select>
                <select class="w-[49%]" name="patienst_status">
                    <option value="">Selecione o status do usuário</option>
                    <option value="actived">Ativo</option>
                    <option value="desable">Inativo</option>
                </select>
                <input class="w-[49%]" type="text" name="patienst_cpf" placeholder="CPF">
                <input class="w-[49%]" type="text" name="patienst_rg" placeholder="RG ">
                
                <input class="w-[49%]" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="CEP apenas números" />
                
                <input class="w-[49%]" type="text" name="cidade" id="cidade" placeholder="Cidade">
                <input class="size-full" type="text" name="rua" id="rua" placeholder="Endereço">
                <input class="w-[49%]" type="text" name="bairro" id="bairro" placeholder="Bairro">
                <input class="w-[49%]" type="text" name="complement" placeholder="Complemento">
                <input class="w-[49%]" type="text" name="uf" placeholder="Estado">
                <textarea class="size-full" name="observation" placeholder="Observações"></textarea>
                <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">
            </div>
        </form>
        <!-- fechamento div modal -->
    </div>
</div>