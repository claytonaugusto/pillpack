// Pegando os elementos
const openNewModalBtn = document.getElementById('openNewModalBtn');
const newModal = document.getElementById('newModal');
const closeNewModalBtn = document.getElementById('closeNewModalBtn');

// Quando clicar no botão, mostra o novo modal
openNewModalBtn.addEventListener('click', () => {
  newModal.style.display = 'block';
});

// Quando clicar no "x", fecha o novo modal
closeNewModalBtn.addEventListener('click', () => {
  newModal.style.display = 'none';
});

// Se clicar fora do conteúdo, fecha o modal também
window.addEventListener('click', (event) => {
  if (event.target === newModal) {
    newModal.style.display = 'none';
  }
});
