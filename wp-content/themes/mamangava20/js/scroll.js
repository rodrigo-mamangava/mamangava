jQuery(document).ready(function ($) {
    
    //smooth page scroll
    $('a[href*="#"]:not([href="#"])').click(function () {
        
        $('#menu-mmgv').removeClass('in');
               
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
        
        
    });

});