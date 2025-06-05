// Preview do avatar do cadastro de clientes
const loadImage = (event) => {
    const output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    };
    
    // Campos especiais para medicamentos do cadastro de receitas
function toggleCamposEspeciais() {
    const temMedicamentoEspecial = document.querySelector('input[name="medicamento_especial"]:checked').value;
    const camposEspeciais = document.getElementById('campos-especiais');
    camposEspeciais.classList.toggle('hidden', temMedicamentoEspecial !== 'sim');
  }
