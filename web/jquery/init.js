$(document).ready(function () {
  $(".novidades_lista a").css("opacity", "1");
  $(".novidades_lista a").hover(function () {
    $(this).parent().parent().parent().find(".novidades_lista a").css("opacity", "0.7");
    $(this).css("opacity", "1");
    $(this).mouseleave(function () {
      $(this).parent().parent().parent().find(".novidades_lista a").css("opacity", "1");
    });
  });

  AOS.init({
    disable: function() {
      var maxWidth = 1200;
      return window.innerWidth < maxWidth;
    }
  });

  //popup//
  var $caixa = $('#caixa');
  var mascaraHeight = $(document).height();
  var mascaraWidth = $(window).width();

  $('#mascara').css({
    'width': mascaraWidth,
    'height': mascaraHeight
  });
  $('#mascara').fadeIn(1000);
  $('#mascara').fadeTo("slow", 0.8);

  var winH = $(window).height();
  var winW = $(window).width();
  $caixa.css('top', winH / 2 - $caixa.height() / 1);
  $caixa.css('left', winW / 2 - $caixa.width() / 2);
  $caixa.fadeIn(2000);
  $('.window .fechar').click(function (e) {
    e.preventDefault();
    $('#mascara').hide();
    $('.window').hide();
  });
  $('#mascara').click(function () {
    $(this).hide();
    $('.window').hide();
  });

  $(".abrir-busca").click(function() {
    $(this).toggleClass('ativo');
    $(".busca").toggleClass('aberto');
  });


  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 70) {
      $(".top").addClass("fixed");

    } else {
      $(".top").removeClass("fixed");
    }
  });

  $.fn.extend({

  // Define the threeBarToggle function by extending the jQuery object
  threeBarToggle: function(options){

    // Set the default options
    var defaults = {
      color: 'black',
      width: 30,
      height: 25,
      speed: 400,
      animate: true
    }
    var options = $.extend(defaults, options);

    return this.each(function(){

      $(this).empty().css({'width': options.width, 'height': options.height, 'background': 'transparent'});
      $(this).addClass('tb-menu-toggle');
      $(this).prepend('<i></i><i></i><i></i>').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('tb-active-toggle');
        if (options.animate) { $(this).toggleClass('tb-animate-toggle'); }
        $('.tb-mobile-menu').slideToggle(options.speed);
      });
      $(this).children().css('background', options.color);
    });
  },

  });

  $('#menu-toggle').threeBarToggle({color: 'white', width: 30, height: 25});

  $('#menu-toggle').click(function(){
    $(".menu-mobile").toggleClass("mostra");
  });


});
