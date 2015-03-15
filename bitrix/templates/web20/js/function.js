$(document).ready(function () {
    $('#index').sliderPro({
        autoHeight: true,
        autoplay: false,
        updateHash: true,
        buttons: false,
        loop: false,
        forceSize: "fullWindow"
    });
    /*$('#partners-slider').sliderPro();*/
});
$(window).load(function () {
    goto = function (to) {
        $('html,body').animate({
            scrollTop: $(to).offset().top - $(".header").height()
        }, 500);
    };
    $(".anchor").click(function () {
        if ($(this).data("page") !== undefined) {
            var page_index = 0;
            switch ($(this).data("page")) {
                case "main":
                    page_index = 0;
                    break;
                case "about":
                    page_index = 1;
                    break;
                case "finish":
                    page_index = 2;
                    break;
            }
            $('#index').sliderPro('gotoSlide', page_index);
        }
        if ($(this).data("anchor-start") !== undefined) {
            goto("[data-anchor-end='" + $(this).data("anchor-start") + "']");
        }
    });
    $(".palette-link").on("click", function () {
        $("body").css("background-color", $(this).data("color"));
    });
    $(".palette-reset").on("click", function () {
        $("body").css("background-color", $(this).data("color"));
    });
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:15,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:2800,
            autoplayHoverPause:true,
            mouseDrag:false,
            touchDrag:false,
            lazyLoad:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:false
                }
            }
        })
    });

});