




window.onload = function () {
    toBottom();
  






};

function toBottom() {


            //console.log('loaded footer');
    var footer = $('#page-footer').first();
    var diffHieght = $(document).height() - footer.outerHeight();
    console.info(diffHieght);
    footer.css({'position': 'absolute',
        'top': diffHieght});


}


