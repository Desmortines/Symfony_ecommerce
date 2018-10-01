$(function(){
    $('#btn-up').click(function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });

    $(window).scroll(function(){
        if($(window).scrollTop()<500){
            $('#btn-up').fadeOut();
        }else{
            $('#btn-up').fadeIn();
        }
    });
});