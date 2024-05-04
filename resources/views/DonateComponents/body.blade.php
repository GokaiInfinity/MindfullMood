<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 part1">

        </div>
        <div class="col-md-6 part2 d-flex flex-column justify-content-center align-items-start px-5">
            <div class="makedonate my-3">
                Make a Donation
            </div>
            <div class="lh-lg my-3">
                This is your campaign description. It’s a great place to tell visitors what this campaign is about,
                connect with your donors and draw attention to your cause.
            </div>
            <div>
                Frequency
            </div>
            {{-- Frequency Row --}}
            <div class="row col-md-12 ms-1 gap-2 text-center my-2">
                <div class="col-md-5 border1 select1">
                    One Time
                </div>
                <div class="col-md-5 border1 select1">
                    Monthly
                </div>
            </div>

            <div>
                Amount
            </div>
            {{-- Amount Row --}}
            <div class="row col-md-12 ms-1 text-center my-2 gap-2">
                <div class="col-md-2 border1 select2" data-value="10">
                    Rp 10,00
                </div>
                <div class="col-md-2 border1 select2" data-value="50">
                    Rp 50,00
                </div>
                <div class="col-md-2 border1  select2" data-value="100">
                    Rp 100,00
                </div>
                <div class="col-md-2 border1  select2" data-value="200">
                    Rp 200,00
                </div>
                <div class="col-md-2 border1 select2" data-value="other">
                    Other
                </div>
            </div>

            {{-- Other amount input --}}
            <div id="other-amount-input" class="col-md-12 mt-2 d-none">
                <input type="text" class="form-control" name="other-amount" placeholder="Enter Amount">
            </div>

            <button class="col-md-12 donatebut my-4" type="button">
                Donate
            </button>

        </div>
    </div>
</div>

<script>
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
</script>


