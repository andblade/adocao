//menu transparente com scroll
$(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 20){
      $(".navbar").addClass("bg-dark");
    }else{
      $(".navbar").removeClass("bg-dark");
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

/************************************************************************************************/
//JavaScript do w3js para ativar os includes
/************************************************************************************************/
/* W3.JS 1.03 December 2017 by w3schools.com */
"use strict";
var w3 = {};

w3.includeHTML = function(cb) {
  var z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          elmnt.removeAttribute("w3-include-html");
          w3.includeHTML(cb);
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      return;
    }
  }
  if (cb) cb();
};
/************************************************************************************************/
//Fim JavaScript do w3js para ativar os includes
/************************************************************************************************/