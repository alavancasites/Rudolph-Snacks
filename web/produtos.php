<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Produtos - Rudolph Snaks</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/slick-theme.css');?></style>
</head>
<body>
  <div id="topo"><?php include("topo.php"); ?></div>
  <div class="clear"></div>
  <section class="banner-produtos">
  <?php
    $criteria = new CDbCriteria();
    $criteria->order = 'idbanner_produto desc';
    $criteria->addCondition("ativo = 1");
    $banners = BannerProduto::model()->findAll($criteria);
    foreach($banners as $banner) {
  ?>
    <div><img src="extranet/uploads/BannerProduto/<?=$banner->imagem?>" class="img-responsive" alt="<?=$banner->titulo?>"></div>
  <?php
    }
  ?>
  </section>
  <div class="clear"></div>
  <section class="produtos">
    <div class="container">
      <h1 class="bold text-center mb-4 mt-4" data-aos-duration="700" data-aos="fade-left">DO JEITO QUE VOCÊ QUISER</h1>
      <div class="slide-produtos">
        <?php
          $criteria = new CDbCriteria();
          $criteria->order = 'idpersonalizado desc';
          $criteria->addCondition("ativo = 1");
          $personalizados = Personalizado::model()->findAll($criteria);
          foreach($personalizados as $personalizado) {
        ?>
          <div><img src="extranet/uploads/Personalizado/<?=$personalizado->imagem?>" class="img-responsive" alt="<?=$personalizado->imagem?>"></div>
        <?php
          }
        ?>
      </div>
      <h2 class="font-texto text-center mt-4 mb-4" data-aos-duration="700" data-aos="fade-right">Um produto versátil que permite diferentes sabores. Quem escolhe é você.</h2>
    </div>
  </section>
  <section class="bg-produtos">
    <div class="container">
      <img src="img/limon.png" data-aos="fade-down-left" data-aos-duration="3000" class="limao" alt="Produtos Rudolph">
      <div class="colunas col-12">
        <h2 class="bold mb-4 mt-4" data-aos-duration="400" data-aos="fade-left">PRODUTOS</h2>
      </div>
      <div class="clear"></div>
      <div>
        <?php
          $criteria = new CDbCriteria();
          $criteria->order = 'idproduto desc';
          $criteria->addCondition("ativo = 1");
          $produtos = Produto::model()->findAll($criteria);
          foreach($produtos as $produto) {
        ?>
          <div class="colunas col-10 z-index" data-aos-duration="400" data-aos="fade-up">
            <div class="box">
              <h4 class="bold"><?=$produto->nome?></h4>
              <p class="font-texto"><?=$produto->subtitulo?></p>
              <img src="extranet/uploads/Produto/<?=$produto->imagem?>" class="img-responsive imagem-produto" alt="<?=$produto->nome?>">
              <a href="javascript:;" class="btn-primary">
                <div class="bt">
                  Saiba Mais <img width="25" src="img/down.svg" alt="Ver mais">
                </div>
                <div class="texto">
                  <h3 class="bold"><?=$produto->titulo?></h3>
                  <div class="mt30"><?=$produto->texto?></div>
                </div>
              </a>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="container">
      <br><br><br><br><br><br>
      <h2 class="bold mb-4 mt-4 uppercase">Outros snacks</h2>
      <div class="slide2-produtos mt-5">
        <?php
          $criteria = new CDbCriteria();
          $criteria->order = 'idsnack desc';
          $criteria->addCondition("ativo = 1");
          $snacks = Snack::model()->findAll($criteria);
          foreach($snacks as $snack) {
        ?>
          <div>
            <img src="extranet/uploads/Snack/<?=$snack->imagem?>" class="img-responsive" alt="<?=$snack->titulo?>">
            <h2 class="bold"><?=$snack->titulo?></h2>
            <div><?=$snack->texto?></div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section>
  <img src="img/infografico.png" class="img-responsive" alt="infografico">
  <div class="clear"></div>
  <footer><?php include("rodape.php"); ?></footer>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/slick.min.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript">
    $('.banner-produtos').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      fade: false,
      responsive: [{
        breakpoint: 980,
        settings: {
          dots: true,
          arrows: false
        },
      }, ]
    });
    $('.slide-produtos').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      fade: false,

      responsive: [{
        breakpoint: 980,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      }, ]
    });
    $('.slide2-produtos').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      fade: false,
      responsive: [{
        breakpoint: 980,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      }, ]
    });
  </script>
</body>

</html>
