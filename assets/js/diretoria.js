const diretoria = document.querySelectorAll('.hexagonoIndividual');

for (let i = 0; i < diretoria.length; i++){
  diretoria[i].addEventListener('mouseover', function() {
    const ilustracao = document.getElementsByClassName('ilustracao')[i];
    const poligono = ilustracao.getElementsByClassName('cls-1')[0];
    const redes_sociais = document.getElementsByClassName('icones')[i];
    redes_sociais.style.animation = 'opacidade 1s';
    redes_sociais.style.display = 'block';
    poligono.setAttribute('d', 'M0,0,102.5,65,205,0V46.75l-102.5,65L0,46.75Z');
  });
  diretoria[i].addEventListener('mouseout', function() {
    const ilustracao = document.getElementsByClassName('ilustracao')[i];
    const poligono = ilustracao.getElementsByClassName('cls-1')[0];
    const redes_sociais = document.getElementsByClassName('icones')[i];
    redes_sociais.style.animation = 'none';
    redes_sociais.style.display = 'none';
    poligono.setAttribute('d', 'M0,0,102.5,65,205,0V7.58l-102.5,65L0,7.58Z');
  });
}
