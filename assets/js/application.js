$(document).ready(function() {

  $('body').bind('touchstart', function() {});


  $('#nav-mobile').html('<ul>'+ $('.navbar ul.main-nav').html()+ '</ul>');

  $("#nav-trigger a").click(function(e) {
      e.preventDefault();
      $('#nav-mobile').toggleClass('active');
      $(this).parent('#nav-trigger').toggleClass('active');
      $('body').toggleClass('nav-active');
      $(this).toggleClass('is-active');
  });


});

