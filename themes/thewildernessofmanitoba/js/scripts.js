(function($) {

  //This will animate the hero image's size on scroll
  $(window).on('scroll touchmove', function () {
     $('#masthead').addClass('minified', $(document).scrollTop() > 0)
 });

 //This will toggle the panel's height on click
 $('.panel').on('click', '.title', function(){
   $(this).siblings().slideToggle(500).parent().toggleClass('current');
   $(this).parent().siblings().children().next().hide('fast').parent().removeClass('current');
 });

})( jQuery );
