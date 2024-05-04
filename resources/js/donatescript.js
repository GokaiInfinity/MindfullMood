// Get all the div elements with the class 'option'
const options1 = document.querySelectorAll('.select1');

// Add event listener to each option
options1.forEach(option => {
    option.addEventListener('click', () => {
        // Remove 'selected' class from all options
        options1.forEach(opt => opt.classList.remove('selected'));

        // Add 'selected' class to the clicked option
        option.classList.add('selected');

        // Optional: Perform additional actions based on the selected option
        const selectedType = option.dataset.type;
        console.log('Selected option type:', selectedType);
    });
});


// Get all the div elements
const options = document.querySelectorAll('.select2');

// Add event listener to each div
options.forEach(option => {
    option.addEventListener('click', () => {
        // Remove 'selected' class from all options
        options.forEach(opt => opt.classList.remove('selected'));

        // Add 'selected' class to the clicked option
        option.classList.add('selected');

        // Show/hide 'other' amount input based on the value
        const selectedValue = option.dataset.value;
        if (selectedValue === 'other') {
            document.getElementById('other-amount-input').classList.remove('d-none');
        } else {
            document.getElementById('other-amount-input').classList.add('d-none');
        }

        console.log('Selected value:', selectedValue);
    });
});
