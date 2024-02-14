<script>   
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the class "openContactModal"
    var openModalButtons = document.querySelectorAll('.openContactModal');

    // Add a click event listener to each button for opening the modal
    openModalButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent click from propagating to document
            var modal = document.querySelector('.contact-modal');
            modal.classList.add('active');
        });
    });

    // Select all elements with the class "closeContactModal"
    var closeModalButtons = document.querySelectorAll('.closeContactModal');

    // Add a click event listener to each button for closing the modal
    closeModalButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent click from propagating to document
            var modal = document.querySelector('.contact-modal');
            modal.classList.remove('active');
        });
    });

    // Click event listener for closing the modal when clicking outside the "form-area"
    document.addEventListener('click', function(event) {
        var formArea = document.querySelector('.form-area');
        var modal = document.querySelector('.contact-modal');

        // Ensure click is outside form area and modal is active before closing
        if (modal.classList.contains('active') && event.target === modal) {
            modal.classList.remove('active');
        }
    });

    // Prevent modal close function from triggering when clicking inside the form area
    var formArea = document.querySelector('.form-area');
    formArea.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click from propagating to document, which would close the modal
    });
});


</script>

<div class="contact-modal">
    <div class="form-area">
        <div class="pre-form">
            <div class="form-positioning">
                <h2>Get in Touch with Us</h2>
                <p>Whether you have a question, feedback, or just want to say hello, we're here to listen.</p>
            </div>
            <h3 class="closeContactModal">X</h3>
        </div>
        <form action="">
            <?php echo do_shortcode('[contact-form-7 id="6b8e1e8" title="Contact form 1"]'); ?>
        </form>
        
    </div>
</div>