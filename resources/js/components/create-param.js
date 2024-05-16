document.addEventListener('DOMContentLoaded', function () {

    var param_type = document.getElementById('paramType').value;

    if (param_type < 6) {
        var image_input = document.getElementById('input_image');
        image_input.style.visibility = 'hidden';
    }
    else {
        var image_input = document.getElementById('input_image');
        image_input.style.visibility = 'visible';
    }
});
