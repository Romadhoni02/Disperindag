// Navbar toggle for mobile view
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.navbar-toggler');
    const navLinks = document.querySelector('.navbar-collapse');

    if (toggleButton) {
        toggleButton.addEventListener('click', function() {
            navLinks.classList.toggle('show');
        });
    }
});

// Example of a click event for buttons
const buttons = document.querySelectorAll('.btn');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        alert('Button clicked!');
    });
});
