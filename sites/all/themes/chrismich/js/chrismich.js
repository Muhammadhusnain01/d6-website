function news_home_page(){
  $('#slider .scroll').trigger('next');
  setTimeout("news_home_page()", 5000);
}

$("document").ready(function(){
  //Slider automatique des news
  if ($('#slider .scroll').length > 0){
    setTimeout("news_home_page()", 5000);
  }
});