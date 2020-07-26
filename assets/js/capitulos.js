//variáveis com o nome dos capítulos, suas cores e endereço das imagens/páginas
var capitulos = ['AESS', 'CS', 'EMBS', 'EPS', 'PES', 'RAS', 'TEMS'];
var cores = ['#0072A6','#EA9414','#2D3142','#009CA6','#00843D','#981D97','#00B5E2'];
const endereco_img = 'assets/images/logos/logo-';
const endereco_pag = 'includes/pages/';

//variáveis com os ids das tags que irão mudar
const logo = document.getElementById('logo-muda');
const titulo = document.getElementById('titulo-capitulo');
const link = document.getElementById('link-capitulos');

//variável que seleciona todos os hexágonos com logos
const hexagonos = document.querySelectorAll('.logos img');

//eventos nos hexágonos que ativam funções
hexagonos.forEach(item => {
  item.addEventListener('mouseover', TrocadeLogo);
  item.addEventListener('mouseout', Deseleciona);
})

//função que efetua a troca do logo, da cor e da descrição de acordo com o capítulos selecionado
function TrocadeLogo(event){
  //pega o id do elemento que acionou o evento
  const elemento = event.target;
  const id = elemento.getAttribute('id');
  //troca o endereço das imagens
  logo.src = endereco_img+id+'.png';
  logo.style.animation = 'opacidade 1s';
  document.getElementById(id).src = endereco_img+id+'-selecionado.png';
  //pega a cor do capítulo e faz a troca do título e do link
  cor = cores[capitulos.indexOf(id)];
  titulo.style.color = cor;
  link.style.color = cor;
  titulo.innerText = id;
  link.href = endereco_pag+id+'.html';
  //esconde todas as descrições e mostra só a do capítulo escolhido
  const descricoes = document.getElementsByName('descricoes');
  descricoes.forEach(item => {
      item.style.display = 'none';
  })
  const descricao = document.getElementById('descricao-'+id);
  descricao.style.display = 'block';
}

function Deseleciona(){
  //pega o id do elemento que acionou o evento
  const elemento = event.target;
  const id = elemento.getAttribute('id');
  logo.style.animation = 'none';
  //troca a imagem hexagono do capítulo
  document.getElementById(id).src = 'assets/images/logos/Logo-'+id+'-home.png';
}
