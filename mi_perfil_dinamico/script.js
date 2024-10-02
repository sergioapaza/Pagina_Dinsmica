// Obtener elementos del DOM
const contactBtn = document.getElementById('contact-btn');
const modal = document.getElementById('contact-modal');
const closeModal = document.getElementById('close-modal');

// Mostrar modal al hacer clic en el botón
contactBtn.onclick = function() {
    modal.style.display = 'flex';
}

// Cerrar modal al hacer clic en la 'X'
closeModal.onclick = function() {
    modal.style.display = 'none';
}

// Cerrar modal al hacer clic fuera del contenido
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}
