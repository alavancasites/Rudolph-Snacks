<?php
ini_set ("default_charset","");
include("gzip/gzipHTML.php");
include_once("RequestManager.php");
$rotas = array(
	'/empresa'=> 'empresa.php',
	'/servico/(?P<servico>\S+)/(?P<titulo>\S+)'=>'servicos_mostra.php',
  '/'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/inicial/(?P<acesso>\w+)'=>'inicial.php',
	'/index'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/quem-somos'=>'quem-somos.php',
	'/produtos'=>'produtos.php',
	'/industria'=>'industria.php',
	'/contato'=>'industria.php',
	'/politica-de-privacidade'=>'politica.php',
);
$request_manager = new RequestManager();
$request_manager->run($rotas);
exit;
