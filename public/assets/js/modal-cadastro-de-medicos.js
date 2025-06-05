// Elementos
const openMedicalModalButton = document.getElementById('openMedicalModalButton');
const medicalModal = document.getElementById('medicalModal');
const closeMedicalModalButton = document.getElementById('closeMedicalModalButton');
const medicalForm = document.getElementById('medicalForm');

// Abrir Modal
openMedicalModalButton.addEventListener('click', () => {
  medicalModal.classList.add('show');
});

// Fechar Modal
closeMedicalModalButton.addEventListener('click', () => {
  medicalModal.classList.remove('show');
});

// Fechar clicando fora do modal
window.addEventListener('click', (event) => {
  if (event.target === medicalModal) {
    medicalModal.classList.remove('show');
  }
});
