( function( $ ) {

  $('#click-button').click(function(){
    $(this).toggleClass('is-active');
    $('.main-navigation').toggleClass('toggle-menu', 100)
  });

} )( jQuery );
