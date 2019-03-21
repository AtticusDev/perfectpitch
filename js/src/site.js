jQuery(document).ready(function($){
// Add your custom jQuery here


  $('.profitBtn').click(function()
  {
    $('.profit-block').toggleClass('is-active');

  });

  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // parallax

  var slideParallaxScene = new ScrollMagic.Scene({
  	triggerElement: '.bcg-parallax',
  	triggerHook: 1,
  	duration: '100%'
  })
  .setTween(TweenMax.from('.bcg', 1, {y:'-50%', ease:Power0.easeNone}))
  .addIndicators()
  .addTo(controller);




});