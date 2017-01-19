(function($) {

 //This gives the navigation an overlay on scroll.
 // $(window).scroll(function() {
 //      var scroll = $(window).scrollTop();
 //      if (scroll >= 10) {
 //        $("#masthead").addClass("overlay");
 //      } else {
 //        $("#masthead").removeClass("overlay");
 //
 //      }
 //  });
 //
 //  $('.faq-text').on('click', function(){
 //    $(this).toggleClass('move');
 //  })

 $('.panel .title').on('click', function(){
   $(this).siblings().slideToggle(500).parent().toggleClass('current');
 });

})( jQuery );
