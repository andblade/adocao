//menu transparente com scroll
$(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 20){
      $(".navbar").addClass("bg-primaria");
    }else{
      $(".navbar").removeClass("bg-primaria");
    }
  });
});
//fim

//Transição suave entre os menus
$(function() {
  // Handler for .ready() called.
  // Deslize suave
  $(".desliza").on("click", function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    console.log($target.offset().top); 
    $("html, body").stop().animate({"scrollTop": ($target.offset().top - ($("header").hasClass("fixed-top") ? $("header").height() : 100 ))}, 900, "swing", null); //se header tiver a classe fixed-top faça "$("header").height()", se não, faça "100"
    console.log($target.offset().top);
  });
});
//fim

//Back to top button
var btn = $('#buttonTop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
//fim


/************************************************************************************************/
//Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
/************************************************************************************************/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
/************************************************************************************************/
//Fim Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
/************************************************************************************************/