$(document).ready(function(){
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    stagePadding: 100,
    items: 4,
    dots: false,
    slideTransition: 'ease-in',
    responsive: {
      0: {
        items: 1
      },
      425: {
        items: 3
      },
      1000: {
        items: 3
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
