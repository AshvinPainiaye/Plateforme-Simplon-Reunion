// Scroll pour les liens du menu de navigation
$('a[href^="#apropos"]').click(function () {
    var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop: $(the_id).offset().top
    }, 'slow');
    return false;
});

function myFunction() {
    location.replace("../index.html")
    descendre();
};

function descendre(){
  
};
// Fin
