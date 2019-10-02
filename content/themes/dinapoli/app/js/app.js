var app = {

    init: function() {
        console.log('pattern scss');

        $('a[href^="#"]').on('click', app.scrollSection);
    },


    scrollSection: function(event){
        event.preventDefault();

        var target = $(this).attr('href');

       /* le sélecteur $(html, body) permet de corriger un bug sur chrome
       et safari (webkit) */
        $('html, body')

       // on arrête toutes les animations en cours
       .stop()

       /* on fait maintenant l'animation vers le haut (scrollTop) vers
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1500 );

    }

}

$(app.init);