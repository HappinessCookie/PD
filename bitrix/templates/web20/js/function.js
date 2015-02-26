$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: false,
        items: 1,
        URLhashListener: true,
        startPosition: 'URLHash'
    });
    owl.on('dragged.owl.carousel', function(event) {
        switch (event.relatedTarget._current) {
            case 0: window.history.pushState({url:'/#main'}, "", "/#main");
                break;
            case 1: window.history.pushState({url:'/#about'}, "", "/#about");
                break;
            case 2: window.history.pushState({url:'/#finish'}, "", "/#finish");
                break;
        }
        console.log(event);
    });
});