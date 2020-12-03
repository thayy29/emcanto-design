$(function(){
    $ (".menu-mobile").click(function(){
        if ($('.header-menu').hasClass('open')){
            $(".header-menu").removeClass("open");   
        } else {
            $(".header-menu").addClass("open");
        }
    })

    $(window).click(function(){
        $(".header-menu").removeClass("open");
    })

    $(".menu-mobile, .header-menu").click(function(event){
        event.stopPropagation();
    })


    $(".events-item").mouseenter(function(){
        $(this).find(".events-item-hidden").stop().slideDown();
    })

    $(".events-item").mouseleave(function(){
        $(this).find(".events-item-hidden").stop().slideUp();
    })

});