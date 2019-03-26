jQuery(document).ready(function($){
// Add your custom jQuery here


  $('.profitBtn').click(function()
  {
  	$('.consistency-block').removeClass('is-active');
  	$('.waste-block').removeClass('is-active'); 	
    $('.profit-block').addClass('is-active');

  });
  $('.consistencyBtn').click(function()
  {
  	$('.waste-block').removeClass('is-active'); 	
    $('.profit-block').removeClass('is-active');
    $('.consistency-block').addClass('is-active');

  });
  $('.wasteBtn').click(function()
  {
    $('.profit-block').removeClass('is-active');
    $('.consistency-block').removeClass('is-active');
    $('.waste-block').addClass('is-active');

  });
  $('.closeBtn').click(function()
  {
    $('.profit-block').removeClass('is-active');
    $('.consistency-block').removeClass('is-active');
    $('.waste-block').removeClass('is-active');

  });

  $('.caseStudyBtn').click(function()
  {
  	$('.case-study-block').addClass('is-active');
  });
  $('.closeCaseBtn').click(function()
  {
    $('.case-study-block').removeClass('is-active');

  });


  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // parallax

  var slideFadeScene = new ScrollMagic.Scene({
    triggerElement: '.fade-up',
    triggerHook: 0.7,
    reverse: false
  })
  .setClassToggle('.fade-up', 'in-view') // add class to fade-up
  .addIndicators()
  .addTo(controller);




  var slideParallaxScene = new ScrollMagic.Scene({
  	triggerElement: '.bcg-parallax',
  	triggerHook: 1,
  	duration: '200%'
  })
  .setTween(TweenMax.from('.bcg', 1, {y:'-50%', ease:Power0.easeNone}))
//  .addIndicators()
  .addTo(controller);




});