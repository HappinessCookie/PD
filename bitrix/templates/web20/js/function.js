$(document).ready(function () {
    $('#page_holder').pagify({
        pages: ['main', 'about1', 'finish'],
        animation: 'fadeIn',
        'default': 'main'
    });
});