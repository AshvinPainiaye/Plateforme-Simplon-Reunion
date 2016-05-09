// Scroll pour les liens du menu de navigation 
$('a[href^="#apropos"],a[href^="#accueil"]').click(function () {
    var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop: $(the_id).offset().top
    }, 'slow');
    return false;
});
// Fin