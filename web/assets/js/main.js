$(document).ready(function() {
    if ($(this).scrollTop() > 155) {
        $('#FixNav').show();
    }

    $(this).scroll(function() {
        if ($(document).scrollTop() > 155) {

                $('#FixNav').fadeIn('slow','swing')

        }
        else {
            $('#FixNav').hide();
        }
    });
});