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
