var svg = document.getElementById('Layer_1-2'); //pega a roda
var graus = 0; //determina o grau inicial
var tempo = null; //tempo que vai controlar a função automática
var beneficios = ['Benefício A', 'Benefício B', 'Benefício C', 'Benefício D', 'Benefício E', 'Benefício F'];

const titulo = document.getElementById('titulo-beneficio');

var roda = function () { //função que roda de 60 em 60deg até 360deg a cada 1 segundo
  graus = (graus+60)%360;
  svg.style.transform = 'rotate('+graus+'deg)';
  tempo = setTimeout(roda,1000);
}

function gira(){ //função que bota pra rodar automático
  var tempo = null;
  roda();
}

function ngira(){ //função que para de rodar automático
  clearTimeout(tempo);
}

function ir(sinal){ //função que vai ou volta o item dependendo do que veio no botão
  if (sinal == 'vai'){graus = (graus+60)%360;}
  else{graus = (graus-60)%-360;}
  svg.style.transform = 'rotate('+graus+'deg)';
}
