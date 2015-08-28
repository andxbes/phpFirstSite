




window.onload = function () {

    $('#page-footer').ready( function () {
        console.log('loaded footer');
        var footer = $('#page-footer').first();
        var diffHieght = $(window).height() - footer.outerHeight();
        footer.css({'position':'absolute',
                     'top': diffHieght});
    });


};