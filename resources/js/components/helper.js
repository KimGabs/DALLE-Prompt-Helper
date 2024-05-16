document.addEventListener('DOMContentLoaded', function () {
    var userInput = document.getElementById('userInput');
    var readOnlyInput = document.getElementById('readOnlyInput');
    var dropdowns = document.querySelectorAll('.parameters'); 

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

        readOnlyInput.value = combinedValues;
    }
});
