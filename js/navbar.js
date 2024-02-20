// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the class 'menu-button'
    var menuButtons = document.querySelectorAll('.menu-button');

    // Add click event listener to each menu button
    menuButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Select the nav element with class 'navbar content-container'
            var navBar = document.querySelector('.navbar.content-container');
            // Toggle the 'active' class on the navBar
            navBar.classList.toggle('active');
        });
    });

    // Select all menu items within the navbar
    var menuItems = document.querySelectorAll('.navbar.content-container a'); // Assuming menu items are <a> tags

    // Add click event listener to each menu item to remove 'active' class from navbar
    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Select the nav element with class 'navbar content-container'
            var navBar = document.querySelector('.navbar.content-container');
            // Remove the 'active' class from the navBar
            if (navBar.classList.contains('active')) {
                navBar.classList.remove('active');
            }
        });
    });
});

