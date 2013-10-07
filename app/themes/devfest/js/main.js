$(window).load(function(){
  console.log('window load');

  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 300,
    itemMargin: 0,
    maxItems: 1
  });
});