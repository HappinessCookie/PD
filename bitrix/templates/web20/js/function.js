$(document).ready(function () {
    var owl = $('.owl-carousel')
    owl.owlCarousel({
        loop: false,
        items: 1,
        URLhashListener: true,
        startPosition: "#main"
    });
    owl.on('changed.owl.carousel', function (event) {
        switch (event.relatedTarget._current) {
            case 0:
                window.history.pushState("string", "", "/#main");
                location.hash = "main";
                break;
            case 1:
                window.history.pushState("string", "", "/#about");
                location.hash = "about";
                break;
            case 2:
                window.history.pushState("string", "", "/#finish");
                location.hash = "finish";
                break;
        }
        console.log(event.item.index);
    });
    $(".palette").click(function() {
        $("#main-carousel").css("background-color", $(this).data("color"));
    });
});