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

document.addEventListener('DOMContentLoaded', function () {
    const sequence1 = document.querySelector('.sequence1');
    const sequence2 = document.querySelector('.sequence2');
    const sequence3 = document.querySelector('.sequence3');
    const sequence4 = document.querySelector('.sequence4');
    
    if (sequence1 && sequence2 && sequence3 && sequence4) {
        setTimeout(function () {
            sequence1.classList.add('appear');
        }, 0);
        setTimeout(function () {
            sequence2.classList.add('appear');
        }, 1000);
        setTimeout(function () {
            sequence3.classList.add('appear');
        }, 2000);
        setTimeout(function () {
            sequence4.classList.add('appear');
        }, 3000);
    } else {
        console.error('One or more elements not found');
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const sequence1_1 = document.querySelector('.sequencepart1_1');
    const sequence1_2 = document.querySelector('.sequencepart1_2');
    
    
    if (sequence1_1 && sequence1_2) {
        setTimeout(function () {
            sequence1.classList.add('appear');
        }, 0);
        setTimeout(function () {
            sequence2.classList.add('appear');
        }, 1000);
    } else {
        console.error('One or more elements not found');
    }
});

//main page donation
document.addEventListener('DOMContentLoaded', function() {
    // Fetch all elements with the class 'donatecard'
    const donateCards = document.querySelectorAll('.donatecard');

    // Add click event listener to each card
    donateCards.forEach(function(card) {
        card.addEventListener('click', function() {
            // If the card is already selected, remove the 'selected' and 'no-hover' classes
            if (card.classList.contains('selected') && card.classList.contains('no-hover')) {
                card.classList.remove('selected', 'no-hover');
            } else {
                // Remove 'selected' and 'no-hover' classes from all cards
                donateCards.forEach(function(c) {
                    c.classList.remove('selected', 'no-hover');
                });

                // Add 'selected' and 'no-hover' classes to the clicked card
                card.classList.add('selected', 'no-hover');
            }
        });
    });
});

