$(document).ready(function () {
    $('.slider-pro').sliderPro({
        autoHeight: true,
        autoplay: false,
        updateHash: true,
        buttons: false,
        loop: false,
        forceSize: "fullWindow"
    });
    $(".palette-link").click(function () {
        $("#main-carousel").css("background-color", $(this).data("color"));
    });
    $(".dial").knob({
        format: function(v) {
            return v + "%";
        }
    });
});