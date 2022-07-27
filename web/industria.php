<?
$model = new Contato();
if(is_array($_POST['Contato'])){
	$model->attributes = $_POST['Contato'];
	$model->data = date('d/m/Y H:i:s');
	$model->ip = $_SERVER['REMOTE_ADDR'];
	
	if($model->save()){
		$model = new Contato();
		$sucesso = 1;
		header("Location: industrial?sucesso=1");
	}
	
}
$erro = CHtml::errorSummary($model);
$form = new CActiveForm();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Indústria - Rudolph Snaks</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?> <?php echo file_get_contents ('css/slick-theme.css');?></style>
</head>
<body>
<div id="topo">  <?php include("topo.php"); ?></div>
<div class="clear"></div>
<section class="banner-produtos">
  <div> <img src="img/banner-industria.jpg" class="img-responsive" alt="Torresmo e Pururuca como você nunca viu"> </div>
</section>
<div class="clear"></div>
<section> <img src="img/industria.jpg" class="img-responsive" alt="industria"> </section>
<section class="industria-video">
  <div class="container">
    <h2 class="bold" data-aos-duration="500" data-aos="fade-left"> TUDO O QUE A <br>
      RUDOLPH <strong class="especial">Snacks</strong> É: </h2>
    <div class="clear"></div>
    <div class="colunas col-18 off-1 mt-5">
      <video width="100%" height="500" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag. </video>
    </div>
    <div class="clear"></div>
  </div>
</section>
<section> <img src="img/fabrica.jpg" class="img-responsive" alt="Da fábrica ao pdv, tudo pronto pra você."> <img src="img/vender.jpg" class="img-responsive" alt="Você só se preocupa em vender."> </section>
<section class="contato" id="contato">
  <div class="container">
    <div class="colunas col-12" data-aos-duration="500" data-aos="fade-left">
      <h2 class="bold">Ficou interessado?</h2>
      <p>Preencha o formulário com as informações corretas.</p>
    </div>
    <div class="clear"></div>
    <?
      if(!empty($erro)){
    ?>
      <div class="error margin20"><?=$erro;?></div>
    <?
      }if($_GET['sucesso'] == 1){
    ?>
      <div class="sucesso_msg">Contato enviado com sucesso. Obrigado!</div>
    <?
      }
    ?>
    <form class="mt-3" data-aos-duration="500" data-aos="fade-up" action="industria" method="post">
      <input type="hidden"  name="grava" value="1" />
      <div class="colunas col-5 mt-2"><label for="Contato_nome"><?=$model->getAttributeLabel('nome')?></label><?php echo $form->textField($model,'nome',array('maxlength'=>100)); ?></div>
      <div class="colunas col-5 mt-2"><label for="Contato_email"><?=$model->getAttributeLabel('email')?></label><?php echo $form->textField($model,'email',array('maxlength'=>100)); ?></div>
      <div class="colunas col-5 mt-2"><label for="Contato_telefone"><?=$model->getAttributeLabel('telefone')?></label><?php echo $form->textField($model,'telefone',array('maxlength'=>100)); ?></div>
      <div class="colunas col-5 mt-2"><label for="Contato_assunto"><?=$model->getAttributeLabel('assunto')?></label><?php echo $form->textField($model,'assunto',array('maxlength'=>100)); ?></div>
      <div class="colunas col-20 mt-2"><label for="Contato_mensagem"><?=$model->getAttributeLabel('mensagem')?></label><?php echo $form->textArea($model,'mensagem',array('rows'=>'6','cols'=>'40')); ?></textarea></div>
      <div class="colunas col-7 off-10">
        <div class="checkbox mt-4">
          <input type="checkbox" id="Contato[aceite]" name="Contato_aceite" value="1">
          <label for="horns">Declaro que li e aceito as <a href="politica-de-privacidade">políticas da Rudolph Snacks</a></label>
        </div>
      </div>
      <div class="colunas col-3 mt-2">
        <button type="submit" name="button"> Enviar <img src="img/next-preto.svg" alt="Enviar"> </button>
      </div>
    </form>
  </div>
</section>
<div class="clear"></div>
<div id="animalogo"></div>
<footer>
  <?php include("rodape.php"); ?>
</footer>
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
        console.log(resultado[4]);
    		$('html, body').animate({
    			scrollTop: $("#" +resultado[4]).offset().top - 200
    		}, 500);
    	}
    	PegarUrl();

    });
  </script>
</body>
</html>
