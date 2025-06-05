// Elementos
const openSpecialtiesModalButton = document.getElementById('openSpecialtiesModalButton');
const specialtiesModal = document.getElementById('specialtiesModal');
const closeSpecialtiesModalButton = document.getElementById('closeSpecialtiesModalButton');
const specialtiesForm = document.getElementById('specialtiesForm');

// Abrir Modal
openSpecialtiesModalButton.addEventListener('click', () => {
  specialtiesModal.classList.add('show');
});

// Fechar Modal
closeSpecialtiesModalButton.addEventListener('click', () => {
  specialtiesModal.classList.remove('show');
});

// Fechar clicando fora do modal
window.addEventListener('click', (event) => {
  if (event.target === specialtiesModal) {
    specialtiesModal.classList.remove('show');
  }
});
