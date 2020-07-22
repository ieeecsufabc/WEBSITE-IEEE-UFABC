$(document).ready(function(){
  $(window).scroll(function(){
    if($(this).scrollTop() > 40){
      $("#voltar-ao-topo").fadeIn();
    }
    else{
      $("#voltar-ao-topo").fadeOut();
    }
  });
  $("#voltar-ao-topo").click(function(){
    $('html, body').animate({scrollTop: 0}, 800);
  });
});
