const capitulos = document.querySelectorAll('.logos img');

capitulos.forEach(item => {
  item.addEventListener('mouseover', TrocadeLogo);
  item.addEventListener('click', TrocadeLogo);
})

function TrocadeLogo(event){
  const elemento = event.target;
  const nome = elemento.getAttribute('name');
  document.getElementById('logo-muda').src = 'assets/images/logos/logo-'+nome+'.png';
  var cor = ' '
  switch (nome) {
    case 'AESS':
      cor = '#0072A6';
      break;
    case 'CS':
      cor = '#EA9414';
      break;
    case 'EMBS':
      cor = '#2D3142';
      break;
    case 'EPS':
      cor = '#009CA6';
      break;
    case 'PES':
      cor = '#00843D';
      break;
    case 'RAS':
      cor = '#981D97';
      break;
    case 'TEMS':
      cor = '#00B5E2';
      break;
    default:
      cor = 'black';
  }
  const titulo = document.getElementById('titulo-capitulo');
  const link = document.getElementById('link-capitulos');
  const descricoes = document.getElementsByName('descricoes');
  const descricao = document.getElementById('descricao-'+nome);
  titulo.style.color = cor;
  link.style.color = cor;
  titulo.innerText = nome;
  link.href = 'includes/pages/'+nome+'.html';
  descricoes.forEach(item => {
      item.style.display = 'none';
    })
  descricao.style.display = 'block';
}
