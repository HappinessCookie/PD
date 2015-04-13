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
                items: 3,
                nav: false
            },
            600: {
                items: 5,
                nav: false
            },
            1000: {
                items: 8,
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
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    /* Google map */
    var map;
    function initialize() {

        // Create an array of styles.
        var styles = [
            {"stylers": [
                {"hue": "#ff1a00"},
                {"invert_lightness": true},
                {"saturation": -100},
                {"lightness": 33},
                {"gamma": 0.5}
            ]},
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#2D333C"}]
            }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var myLatlng = new google.maps.LatLng(54.724658, 56.008509);
        var mapOptions = {
            zoom: 17,
            center: myLatlng,
            draggable: false,
            scrollwheel: false,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        /* Дорога */
        var flightPlanCoordinates = [
            new google.maps.LatLng(54.725497, 56.009124),
            new google.maps.LatLng(54.725198, 56.008709),
            new google.maps.LatLng(54.724939, 56.008692),
            new google.maps.LatLng(54.724725, 56.008379)
        ];
        var flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: '#1b1a1a',
            strokeOpacity: 1.0,
            strokeWeight: 4
        });
        flightPath.setMap(map);
        /* !Дорога */
        /* Всплывающее окно */
        var contentString = '<div id="content"><img class="logo" src="/bitrix/templates/web20/images/logo.png"><h4 class="text-center">3 этаж, офис 7</h4></div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        /* !Всплывающее окно */
        /* Маркер */
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'ул.С.Агиша, д.16/1, оф.6'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
        /* !Маркер */
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    /* /Google map */
});
$(window).load(function () {
    $('#index').sliderPro('update');
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
        $(".main-image").attr("src", "/bitrix/templates/web20/images/main-image.png");
    });
    $(".palette-grayscale").on("click", function () {
        $("html").addClass("grayscale");
        $("body").css("background-color", "");
        $(".main-image").attr("src", "/bitrix/templates/web20/images/main-image-monochrome.png");
    });
    $(".palette-reset").on("click", function () {
        $("html").removeClass("grayscale");
        $("body").css("background-color", "");
        $(".main-image").attr("src", "/bitrix/templates/web20/images/main-image.png");
    });
    $(".project-preview").on("click", function () {
        $.ajax({
            type: "POST",
            url: "/bitrix/templates/web20/ajax/project-get.php",
            dataType: "json",
            async: false,
            data: {array: $(this).data("id")},
            beforeSend: function () {
                $("#project_load").slideUp(500);
                $('html, body').animate({
                    scrollTop: $('#index').offset().top
                }, 300);
            },
            success: function (data) {
                console.log(data);
                var images = "<div class='row'>";
                for (var i = 0; i < data["layout"].length; i++) {
                    images += '<a class="col-lg-2 project-img" data-gallery="multiimages" data-toggle="lightbox" href="' + data["layout"][i] + '"><img class="image-responsive col-centered" src="' + data["layout"][i] + '" alt="" class="image-responsive"></a>';
                }
                for (var i = 0; i < data["scheme"].length; i++) {
                    images += '<a class="col-lg-2 project-img" data-gallery="multiimages" data-toggle="lightbox" href="' + data["scheme"][i] + '"><img class="image-responsive col-centered" src="' + data["scheme"][i] + '" alt="" class="image-responsive"></a>';
                }
                images += "</div>";
                setTimeout(function () {
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
                    $("#images").html(images);
                    setTimeout(function () {
                        $("#project_load").slideDown(500, function () {
                            $('#index').sliderPro('update');
                        });
                    }, 200);
                }, 800);
            },
            complete: function () {
            },
            error: function (request, status, error) {
                console.log(error);
            }
        });
    });
});