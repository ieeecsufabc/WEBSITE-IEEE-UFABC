$(document).ready(function(){
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    dots: false,
    slideTransition: 'ease-in',
    responsive: {
      0: {
        items: 1,
        stagePadding: 15
      },
      576: {
        items: 2,
        stagePadding: 15
      },
      993: {
        items: 2,
        stagePadding: 140
      },
      1000: {
        items: 2,
        stagePadding: 140
      }
    }
  });

  $("#botao_anterior").on('click', function(){
    owl.trigger('prev.owl.carousel');
  });

  $("#botao_proximo").on('click', function(){
    owl.trigger('next.owl.carousel');
  });

});
