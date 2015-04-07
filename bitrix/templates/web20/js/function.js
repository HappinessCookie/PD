$(document).ready(function () {
    $('.partners').owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 1500,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false
            }
        }
    });
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
    $(".palette-link[data-color]").on("click", function () {
        $("html").removeClass("grayscale");
        $("body").css("background-color", $(this).data("color"));
    });
    $(".palette-grayscale").on("click", function () {
        $("html").addClass("grayscale");
        $("body").css("background-color", "");
    });
    $(".palette-reset").on("click", function () {
        $("html").removeClass("grayscale");
        $("body").css("background-color", "");
    });
    $(".project-preview").on("click", function () {
        $.ajax({
            type: "POST",
            url: "/bitrix/templates/web20/ajax/project-get.php",
            dataType: "json",
            data: {array: $(this).data("id")},
            beforeSend: function () {
                $("#project_load").slideUp(500);
                $('html, body').animate({
                    scrollTop: $('#index').offset().top
                }, 300);
            },
            success: function (data) {
                console.log(data);
                $("#project_name").text(data["name"]);
                $("#price").text(data["price"]);
                $("#house_area").text(data["house_area"]);
                $("#dimensions").text(data["dimensions"]);
                $("#overlap").text(data["overlap"]);
                $("#floor_count").text(data["floor_count"]);
                $("#basement").text(data["basement"]);
                $("#foundation").text(data["foundation"]);
                $("#wall_material").text(data["wall_material"]);
                $("#roofing").text(data["roofing"]);
                $("#garage").text(data["garage"]);
                $("#project_img").html('<img class="image-responsive col-centered" src="' + data["image"] + '" alt="">');
                var images = "";
                for (var i = 0; i < data["layout"].length; i++) {
                    images += '<div class="col-lg-2 project-img"><a href="' + data["layout"][i] + '"><img class="image-responsive col-centered" src="' + data["layout"][i] + '" alt="" class="image-responsive"></a></div>';
                }
                for (var i = 0; i < data["scheme"].length; i++) {
                    images += '<div class="col-lg-2 project-img"><a href="' + data["scheme"][i] + '"><img class="image-responsive col-centered" src="' + data["scheme"][i] + '" alt="" class="image-responsive"></a></div>';
                }
                $("#images").html(images);
            },
            complete: function () {
                $("#project_load").slideDown(500, function () {
                    $('#index').sliderPro('update');
                });
            },
            error: function (request, status, error) {
                console.log(error);
            }
        });
    });
});