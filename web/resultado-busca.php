<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Busca - Rudolph Snaks</title>
  <?php include("header.php"); ?>
  <style type="text/css">
    <?php echo file_get_contents ('css/slick.css');
    ?>
  </style>
</head>

<body>
  <div id="topo"><?php include("topo.php"); ?></div>
  <div class="clear"></div>
  <section class="bg-politica uppercase">
    <div class="container font-texto">
      <h1 class="cor mt-4"><strong>Não encontramos nenhum resultado para sua busca...</strong></h1>

    </div>
  </section>

  <div class="clear"></div>
  <footer><?php include("rodape.php"); ?></footer>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script>

</body>

</html>
