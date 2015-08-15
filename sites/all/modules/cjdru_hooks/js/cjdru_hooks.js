$('document').ready(function(){
  //Line number scroll added on textarea
  $('.page-admin #edit-citations').bind('scroll', function(){
    $(this).css('background-position', '0px -'+ $(this).scrollTop() +'px');
  });
});