document.addEventListener('livewire:navigated', function () {    
    var userInput = document.getElementById('userInput');
    var readOnlyInput = document.getElementById('readOnlyInput');
    var dropdowns = document.querySelectorAll('.parameters'); 
    var confirmButtons = document.querySelectorAll('.confirmButton');
    var buttonsInput = document.getElementById('buttonsInput'); 
    var copyButton = document.getElementById('copyButton');
    var finalPrompt = document.getElementById('finalPrompt');

    copyButton.addEventListener('click', function() {
        navigator.clipboard.writeText(readOnlyInput.value)
        .then(function() {
            alert('Copied to clipboard: ' + readOnlyInput.value);
        })
        .catch(function(error) {
            alert('Failed to copy text: ', error);
        })
    });

    // Event listener for user input
    if (userInput) {
        userInput.addEventListener('keyup', function () {
            updateReadOnlyInput();
        });
    }

    // Event listener for each dropdown change
    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('change', function () {
            updateReadOnlyInput(); 
        });
    });

    // Event listener for each confirm button click
    confirmButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            updateReadOnlyInput();
        });
    });

    function updateReadOnlyInput() {
        var userInputValue = userInput ? userInput.value : '';
        var dropdownValues = [];

        dropdowns.forEach(function(dropdown) {
            if (dropdown.value) {
                dropdownValues.push(dropdown.value);
            }
        });

        var combinedValues = userInputValue;
        if (dropdownValues.length > 0) {
            combinedValues += userInputValue ? ', ' + dropdownValues.join(', ') : dropdownValues.join(', ');
        }

        if (buttonsInput && buttonsInput.value) {
            combinedValues += combinedValues ? ', ' + buttonsInput.value : buttonsInput.value;
        }

        readOnlyInput.value = combinedValues;
        finalPrompt.value = readOnlyInput.value;
    }
});

document.addEventListener("turbolinks:load", function() {
    window.livewire.rescan();
});