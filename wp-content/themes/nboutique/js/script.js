( function( $ ) {

  $('#click-button').click(function(){
    $(this).toggleClass('is-active');
    $('.main-navigation').toggleClass('toggle-menu', 100)
  });

  $('.open-post').click(function(){
    $('.details-wrapper').addClass('visibility');
  });

  $('.close-post').click(function(){
    $('.details-wrapper').removeClass('visibility');
  });

  // Dejar al final!!!!
  new Glide('.glide').mount()

} )( jQuery );
