$(window).on('load', function () {
  $('#loader').fadeIn('slow');
  $('#loader').delay(250).fadeOut('slow');
  $('body').delay(250).css({ 'overflow': 'visible' });
})