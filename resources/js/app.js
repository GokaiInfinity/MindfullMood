import './bootstrap';

// Function to apply the slide-in animation
function applySlideInAnimation() {
    // Get the button element by its ID
    const homedonateButton = document.getElementById('homedonate');

    if (homedonateButton) {
        // Add the 'animate-slide-in' class to apply the animation
        homedonateButton.classList.add('animate-slide-in');

        // Remove the class after a delay so it only runs once
        setTimeout(function() {
            homedonateButton.classList.remove('animate-slide-in');
        }, 1000);
    } else {
        console.error("Button with ID 'homedonateButton' not found.");
    }
}
// Attach the function to the window.onload event
window.onload = applySlideInAnimation;

document.addEventListener('DOMContentLoaded', function() {
    // Fetch all elements with the class 'donatecard'
    const donateCards = document.querySelectorAll('.donatecard');

    // Add click event listener to each card
    donateCards.forEach(function(card) {
        card.addEventListener('click', function() {
            // Remove 'selected' class from all cards
            donateCards.forEach(function(c) {
                c.classList.remove('selected','no-hover');
            });

            // Add 'selected' class to the clicked card
            card.classList.add('selected', 'no-hover');
        });
    });
});
