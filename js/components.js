//FAQ Starts
document.addEventListener('DOMContentLoaded', function() {
    const accordions = document.querySelectorAll('.faq .accordion-item');
  
    accordions.forEach((accordion) => {
      const heading = accordion.querySelector('.heading');
      const body = accordion.querySelector('.body');
  
      heading.addEventListener('click', () => {
        const isOpen = heading.classList.contains('active');
  
        // Close all open accordions
        accordions.forEach((item) => {
          item.querySelector('.body').style.maxHeight = null;
          item.querySelector('.body').style.paddingTop = '0';
          item.querySelector('.body').style.paddingBottom = '0';
          item.querySelector('.heading').classList.remove('active');
        });
  
        // Toggle the clicked accordion
        if (!isOpen) {
          // Add the top and bottom padding values to the max-height
          body.style.maxHeight = body.scrollHeight + 'px'; // Adjust if necessary to account for padding
          body.style.paddingTop = '2rem';
          body.style.paddingBottom = '4rem'; // Increased bottom padding
          heading.classList.add('active');
        }
      });
    });
});
//FAQ Ends