$(window).load(function(){
  console.log('window load');

  $('a.session-details').click(function() {
    $(this).next().slideToggle();
    return false;
  })
});
