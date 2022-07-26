<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rudolph Snaks</title>
<?php include("header.php"); ?>
<style type="text/css">
<?php echo file_get_contents ('css/slick.css');
?> <?php echo file_get_contents ('css/slick-theme.css');
?>
</style>
</head>

<body class="inicial">
<?php /*?><div id="box">
  <div id="caixa" class="window"> <a href="#" class="fechar fonte-ghotam-bold">X</a>
    <div class="popup-texto text-left"><iframe width="800" height="450" src="https://www.youtube.com/embed/6D8CyEDVQOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  </div>
  <div id="mascara"></div>
</div><?php */?>
<div id="topo"><?php include("topo.php"); ?></div>
<div class="clear"></div>
<div id="banner"><?php include("banner_lista.php"); ?></div>
<section class="history-home">
  <div class="container text-center">
    <h2 class="bold title" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="300">A TRADIÇÃO DA FAMÍLIA <span class="especial cor">Rudolph</span> </h2>
    <h3 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="400">Somos a maior indústria de torresmo e pururuca do Brasil, integrada à Rudolph Foods.</h3>
    <a class="btn-primary-outline mt-4" href="quem-somos" data-aos="fade-right" data-aos-easing="linear">Veja nossa história</a> </div>
</section>
<div class="clear"></div>
<section class="slide bg-slide">
  <?php
    $criteria = new CDbCriteria();
    $criteria->order = 'iddestaque_produto desc';
    $criteria->addCondition("ativo = 1");
    $produtos = DestaqueProduto::model()->findAll($criteria);
    foreach($produtos as $produto) {
      if ($produto->externo==1){
        $target = "target='_blank' rel='noopener'";
      }else{ 
        $target = '';
      }

  ?>
    <div> <img src="extranet/uploads/DestaqueProduto/<?=$produto->imagem?>" class="img-responsive" alt="<?=$produto->titulo?>"> <a href="<?=$produto->link?>" class="btn-primary-outline" <?=$target?>><?=$produto->botao?></a> </div>
  <?php
    }
  ?>
</section>
<div class="clear"></div>
<div id="animalogo"></div>
<section class="bg-parceria">
  <div class="container">
    <div class="slide">
      <?php
        $criteria = new CDbCriteria();
        $criteria->order = 'iddestaque desc';
        $criteria->addCondition("ativo = 1");
        $destaques = Destaque::model()->findAll($criteria);
        foreach($destaques as $destaque) {
      ?>
        <div> <img src="extranet/uploads/Destaque/<?=$destaque->imagem?>" class="img-responsive" alt="<?=$destaque->titulo?>"> </div>
      <?php
        }
      ?>
    </div>
    <div class="text-center mt-5">
      <h2><strong>O NEGÓCIO É BOM MESMO.</strong></h2>
      <a class="btn-primary-outline mt-4" href="contato">Comece a vender</a> </div>
  </div>
</section>
<div class="clear"></div>
<footer>
  <?php include("rodape.php"); ?>
</footer>
<?php include("scripts.php"); ?>
<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/slick.min.js&amp;cid=<?=$cid?>"></script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('.slide').slick({dots: false,arrows: true,infinite: true,speed: 300,dots: true,slidesToShow: 1,slidesToScroll: 1,autoplay: true,fade: false,responsive: [{breakpoint: 980,settings: {dots: true,arrows: false},}, ]});
    $('.banner').slick({dots: false,arrows: true,infinite: true,speed: 300,dots: true,slidesToShow: 1,slidesToScroll: 1,autoplay: true,fade: false,});
  });
</script>
</body>
</html>
