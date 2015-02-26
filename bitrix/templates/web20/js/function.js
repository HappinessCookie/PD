$(document).ready(function () {
    $('#page_holder').pagify({
        pages: ['main', 'about', 'finish'],
        animation: 'fadeIn',
        'default': 'main'
    });
    $('.owl-carousel').owlCarousel({
        loop: false,
        items: 1,
        URLhashListener: true,
        startPosition: 'URLHash'
    })
});