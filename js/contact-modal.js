document.addEventListener('DOMContentLoaded', function() {
    var modal = document.querySelector('.contact-modal');
    var closeModal = document.querySelector('.close-modal');
    var formContainer = document.querySelector('.form-container');
    var openModalButtons = document.querySelectorAll('.openContactModal');

    // Function to open the modal
    function openModal() {
        modal.classList.add('active');
    }

    // Function to close the modal
    function closeModalFunc() {
        modal.classList.remove('active');
    }

    // Open modal when clicking on any openContactModal element
    openModalButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default action if it's a link or a button
            openModal();
        });
    });

    // Close modal when clicking on the close button
    closeModal.addEventListener('click', function() {
        closeModalFunc();
    });

    // Close modal when clicking outside of the form container
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModalFunc();
        }
    });
});

