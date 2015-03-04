$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: false,
        items: 1,
        URLhashListener: true,
        startPosition: "URLHash",
        autoHeight: true
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
    $(".palette").click(function () {
        $("#main-carousel").css("background-color", $(this).data("color"));
    });
    $(".dial").knob({
        format: function(v) {
            return v + "%";
        }
    });
});
$(window).load(function() {
    $('.owl-height').height($(".owl-item.active").height());
});
$(window).onresize(function() {
    $('.owl-height').height($(".owl-item.active").height());
});
