<!-- inserir div modal  -->
<div id="specialtiesModal" class="specialties-modal">
    <div class="specialties-modal-content">
        <span id="closeSpecialtiesModalButton" class="specialties-close">&times;</span>
        
        <!-- dashboard cadastro de especialidades -->
        <form method="post" action="cadastro.php" class="flex flex-wrap">
            <input class="size-full" type="text" name="" id="" title="Digite a especialidade" placeholder="Digite a especialidade">
            <!-- datas -->
            <div class="flex flex-wrap w-full justify-between gap-1 mt-1">
                <div class="w-[49%]">
                    <!-- <label class="p-1" for="">Data de cadastro</label> -->
                    <input class="w-full" type="date" name="data" id="data" placeholder="Data de cadastro">
                </div>
                <select class="w-[49%]" name="" id="">
                    <option value="">Selecione o status</option>
                    <option value="">Ativo</option>
                    <option value="">Inativo</option>
                </select>
                <textarea class="size-full min-h-28" name="" id="" placeholder="Observações"></textarea>
                <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">
            </div>
        </form>

        <!-- fechar div modal -->
    </div>
</div>