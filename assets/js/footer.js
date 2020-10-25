//lê o documento e executa a próxima função
$(document).ready(function(){
  //dispara a próxima função quando o usuário dá scroll
  $(window).scroll(function(){
    //executa a função (mostra o botão) se o scroll for maior que 40px
    if($(this).scrollTop() > 40){
      $("#voltar-ao-topo").fadeIn();
    }
    else{
      $("#voltar-ao-topo").fadeOut();
    }
  });
  //solta a animação de scroll suave quando o usuário clica no botão
  $("#voltar-ao-topo").click(function(){
    $('html, body').animate({scrollTop: 0}, 800);
  });
});
