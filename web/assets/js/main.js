$(document).ready(function () {
    if ($(this).scrollTop() > 155) {
        $('#FixNav').show();
    }

    $(this).scroll(function () {
        if ($(document).scrollTop() > 155) {
            if ($('#FixNav').is(':hidden')) {
                $('#FixNav').fadeIn('slow', 'swing');
            }
        }
        else {
            $('#FixNav').hide();
        }
    });
});


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
