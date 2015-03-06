$(document).ready(function () {
    $('#index').sliderPro({
        autoHeight: true,
        autoplay: false,
        updateHash: true,
        buttons: false,
        loop: false,
        forceSize: "fullWindow"
    });
    $('#partners-slider').sliderPro();
    $(".palette-link").click(function () {
        $("body").css("background-color", $(this).data("color"));
    });
    $(".dial").knob({
        format: function(v) {
            return v + "%";
        }
    });
});