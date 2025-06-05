<!-- incluir div do modal -->
<div id="medicalModal" class="medical-modal">
  <div class="medical-modal-content">
    <span id="closeMedicalModalButton" class="medical-close">&times;</span>

<!-- dashboard cadastro de medicos -->
 <h2>Cadastro de médicos</h2>
<form method="post" action="cadastro.php" class="flex flex-wrap">

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
        <input class="w-[49%]" type="text" name="conselho" id="conselho" placeholder="Número do conselho">
        <select class="w-[49%]" name="" id="">
            <option value="">Especialidade</option>
            <option value="">Clínica Geral</option>
            <option value="">Geriatra</option>
            <option value="">Pediatra</option>
        </select>
        <textarea class="size-full" name="" id="" placeholder="Observações"></textarea>
        <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">
    </div>
</form>
<!-- fechar div do modal -->
</div>
</div>