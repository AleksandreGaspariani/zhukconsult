
$(document).ready(function(){
    $('#dropdown-button').parent('a').on('click',function(){
        $('#dropdown-menu').toggleClass('d-none');
    });



    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            $('#backtotop').removeClass('d-none');
        } else {
            $('#backtotop').addClass('d-none');
        }
    }

    $('#backtotop').on('click',function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, 'slow');
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

});
