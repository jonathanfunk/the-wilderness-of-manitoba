(function($) {

  //This will animate the hero image's size on scroll
  $(window).on('scroll touchmove', function () {
     $('#masthead').toggleClass('minified', $(document).scrollTop() > 0);
 });

 //This will toggle the panel's height on click
 $('.panel .title').on('click', function(){
   $(this).siblings().slideToggle(500).parent().toggleClass('current');
 });

})( jQuery );
