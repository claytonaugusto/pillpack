// Pegando elementos pelo ID
const openUserModalButton = document.getElementById('openUserModalButton');
const userModal = document.getElementById('userModal');
const closeUserModalButton = document.getElementById('closeUserModalButton');
const userForm = document.getElementById('userForm');

// Abrir Modal
openUserModalButton.addEventListener('click', () => {
  userModal.classList.add('show');
});

// Fechar Modal
closeUserModalButton.addEventListener('click', () => {
  userModal.classList.remove('show');
});

// Fechar clicando fora do Modal
window.addEventListener('click', (event) => {
  if (event.target === userModal) {
    userModal.classList.remove('show');
  }
});
