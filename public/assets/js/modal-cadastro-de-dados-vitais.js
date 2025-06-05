// Elementos
const openVitalDataModalButton = document.getElementById('openVitalDataModalButton');
const vitalDataModal = document.getElementById('vitalDataModal');
const closeVitalDataModalButton = document.getElementById('closeVitalDataModalButton');
const vitalDataForm = document.getElementById('vitalDataForm');

// Abrir Modal
openVitalDataModalButton.addEventListener('click', () => {
  vitalDataModal.classList.add('show');
});

// Fechar Modal
closeVitalDataModalButton.addEventListener('click', () => {
  vitalDataModal.classList.remove('show');
});

// Fechar clicando fora do modal
window.addEventListener('click', (event) => {
  if (event.target === vitalDataModal) {
    vitalDataModal.classList.remove('show');
  }
});

