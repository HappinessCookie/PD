$(document).ready(function () {
    $('.slider-pro').sliderPro({
        width: "100%",
        height: "100%",
        autoHeight: true,
        autoplay: false,
        updateHash: true,
        buttons: false,
        loop: false
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
