<!-- incluir div modal -->
<div id="vitalDataModal" class="vitalData-modal">
  <div class="vitalData-modal-content">
    <span id="closeVitalDataModalButton" class="vitalData-close">&times;</span>


<!-- dashboard cadastro de dados vitais -->
 <h2>Cadastro de dados vitais</h2>
<form method="post" action="cadastro_date_vital.php" class="flex flex-wrap">
    <div class="w-full">
        <select class="w-full" name="vital_date_patient">
            <option value="">Selecione o paciente</option>
            <option value="user1">Marcelo</option>
            <option value="user2">Maria</option>
            <option value="user3">Joaquim</option>
            <option value="user4">Rosa</option>
            <option value="user5">Joaquina</option>
        </select>
    </div>
    
    <!-- datas -->
    <div class="flex flex-wrap w-full justify-between gap-1 mt-1">
        <input class="w-[32%]" type="date" name="vital_date_date" placeholder="Data de cadastro">
        
        <input class="w-[32%]" type="text" name="vital_date_blood_pressure" placeholder="Pressão Arterial (mmHg)">
        
        <input class="w-[32%]" type="text" name="vital_date_saturation" placeholder="Saturação (%)">
        
        <input class="w-[32%]" type="text" name="vital_date_frequency_cardiac" placeholder="Frequência Cardíaca (bpm)">
        
        <input class="w-[32%]" type="text" name="vital_date_frequency_respiratory" placeholder="Frequência Respiratória (irpm)">
        
        <input class="w-[32%]" type="text" name="vital_date_temperature" placeholder="Temperatura (°C)">
        
        <input class="w-[32%]" type="text" name="vital_date_blood_glucose" placeholder="Glicose Jejum (mg/DI)">
        
        <input class="w-[32%]" type="text" name="vital_date_blood_aa" placeholder="Glicose A.A (mg/DI)">
        
        <input class="w-[32%]" type="text" name="vital_date_blood_aj" placeholder="Glicose A.J (mg/DI)">
        
        <input class="w-[32%]" type="text" name="vital_date_blood_ad" placeholder="Glicose A.D (mg/DI)">
        
        <select class="w-[32%]" name="vital_date_evacuation">
            <option value="">Evacuação</option>
            <option value="yes">Sim</option>
            <option value="no">Não</option>
        </select>
        
        <input class="w-[32%]" type="text" name="vital_date_mic" placeholder="Mic">
        
        <select class="w-[32%]" name="vital_date_responsible">
            <option value="">Responsável</option>
            <option value="employee">Funcionário 1</option>
        </select>
        
        <select class="w-[32%]" name="vital_date_action">
            <option value="">O que seria a ação?</option>
            <option value="action">Apenas um teste</option>
        </select>
        
        <textarea class="w-[32%]" name="vital_date_observation" placeholder="Observações"></textarea>
        
        <input class="w-60 bg-(--bg-btn) rounded-lg block p-3 text-(--bg-baby-powder) mb-2.5 cursor-pointer duration-300 hover:bg-(--bg-btn-hover) font-bold" type="submit" value="Cadastrar" title="Cadastrar usuário">
    </div>
    
</form>
        
<!-- fechar div modal -->
    </div>
</div>