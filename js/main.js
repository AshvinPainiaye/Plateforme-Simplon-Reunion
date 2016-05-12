 //affiche icone remonter
 $(window).scroll(
     function () {
         if ($(window).scrollTop() > 2) {
             // fixed
             $(".fa-chevron-up").css('visibility', 'visible');
         } else {
             // unfixed
             $(".fa-chevron-up").css('visibility', 'hidden');
         }
     }
 );
 // fin

 // Scroll pour remonter
 $('a[href^="body"]').click(function () {
     var the_id = $(this).attr("href");
     $('html, body').animate({
         scrollTop: $(the_id).offset().top
     }, 'slow');
     return false;
 });
 //fin