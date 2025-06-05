<!-- incluir div modal -->
<div id="vitalDataModal" class="vitalData-modal">
  <div class="vitalData-modal-content">
    <span id="closeVitalDataModalButton" class="vitalData-close">&times;</span>


        <!-- dashboard cadastro de dados vitais -->
         <h2>Cadastro de dados vitais</h2>
        <form method="post" action="cadastro.php" class="flex flex-wrap">
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
        
<!-- fechar div modal -->
    </div>
</div>