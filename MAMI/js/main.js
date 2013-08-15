$(document).on('ready', iniciar_funciones);
function cambiar_slide(){
    var total_slides = parseInt($('.slide').length);
    var slide_visible = parseInt($('.slide:visible').attr('data-slide'));
    if (slide_visible === total_slides) {
        $('.slide').hide();
        $('.slide').eq(0).fadeIn(1000);
    } else {
        $('.slide').hide();
        $('.slide').eq(slide_visible++).fadeIn(1000);
    }
}
function iniciar_funciones(){
    slider(3);
    setInterval(cambiar_slide, 3000);
    $('header nav ul li:last-child').on('click', function(){
        $('#iniciar_sesion').dialog('open');
    });
    $('#iniciar_sesion').dialog({
        autoOpen: false,
        modal: true
    });
}
function slider(slides){
    for (var i = 1; i <= slides; i++){
        $('#slider').append('\n\
            <article class="slide" data-slide="' + i + '">\n\
            <figure>\n\
            <img alt="" src="/img/slider/' + i + '.png">\n\
            </figure>\n\
            </article>\n\
        ');
    }
}