<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Indústria - Rudolph Snaks</title>
  <?php include("header.php"); ?>
  <style type="text/css">
    <?php echo file_get_contents ('css/slick.css');
    ?>
    <?php echo file_get_contents ('css/slick-theme.css');
    ?>
  </style>
</head>

<body>
  <div id="topo"><?php include("topo.php"); ?></div>
  <div class="clear"></div>
  <section class="banner-produtos">
    <div>
      <img src="img/banner-industria.jpg" class="img-responsive" alt="Torresmo e Pururuca como você nunca viu">
    </div>
  </section>
  <div class="clear"></div>
  <section>
    <img src="img/industria.jpg" class="img-responsive" alt="industria">
  </section>
  <section class="industria-video">
    <div class="container">
      <h2 class="bold" data-aos-duration="500" data-aos="fade-left">
        TUDO O QUE A <br> RUDOLPH <strong class="especial">Snaks</strong> É:
      </h2>
      <div class="clear"></div>
      <div class="colunas col-18 off-1 mt-5">
        <video width="100%" height="500" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <section>
    <img src="img/fabrica.jpg" class="img-responsive" alt="Da fábrica ao pdv, tudo pronto pra você.">
    <img src="img/vender.jpg" class="img-responsive" alt="Você só se preocupa em vender.">
  </section>
  <section class="contato" id="contato">
    <div class="container">
      <div class="colunas col-12" data-aos-duration="500" data-aos="fade-left">
        <h2 class="bold">Ficou interessado?</h2>
        <p>Preencha o formulário com as informações corretas.</p>
      </div>
      <div class="clear"></div>
      <form class="mt-3" data-aos-duration="500" data-aos="fade-up" action="index.html" method="post">
        <div class="colunas col-5 mt-2">
          <label for="">Nome</label>
          <input type="text" name="" value="">
        </div>
        <div class="colunas col-5 mt-2">
          <label for="">E-mail</label>
          <input type="text" name="" value="">
        </div>
        <div class="colunas col-5 mt-2">
          <label for="">Telefone</label>
          <input type="text" name="" value="">
        </div>
        <div class="colunas col-5 mt-2">
          <label for="">Assunto</label>
          <input type="text" name="" value="">
        </div>
        <div class="colunas col-20 mt-2">
          <label for="">Mensagem</label>
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
        <div class="colunas col-7 off-10">
          <div class="checkbox mt-4">
            <input type="checkbox" id="horns" name="horns">
            <label for="horns">Declaro que li e aceito as <a href="">políticas da Rudolph Snacks</a></label>
          </div>
        </div>
        <div class="colunas col-3 mt-2">
          <button type="button" name="button">
            Enviar <img src="img/next-preto.svg" alt="Enviar">
          </button>
        </div>
      </form>
    </div>
  </section>
  <div class="clear"></div>
  <div id="animalogo"></div>
  <footer><?php include("rodape.php"); ?></footer>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/slick.min.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.banner-produtos').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        responsive: [{
          breakpoint: 980,
          settings: {
            dots: true,
            arrows: false
          },
        }, ]
      });

      function PegarUrl(){
    		var newURL =  window.location.pathname;
    		var resultado = newURL.split("/");
        console.log(resultado[2]);
    		$('html, body').animate({
    			scrollTop: $("#" +resultado[2]).offset().top - 200
    		}, 500);
    	}
    	PegarUrl();

    });
  </script>
</body>

</html>
