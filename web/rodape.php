<a target="_blanck" href="https://api.whatsapp.com/send?phone=554141220011&text=Ol%C3%A1" class="whats"><img src="img/whats.svg" alt="whatsApp"></a>
<footer>
	<div class="container">
		<div class="text-center mb-4">
			<div class="mb-4 logo">
				<img src="img/frase-logo.svg" class="effect" data-aos-anchor="#animalogo" data-aos="flip-left" alt="rudolph">
				<img src="img/rudolph.svg" data-aos-anchor=".animalogo"  data-aos-duration="500" data-aos="fade-down" alt="rudolph">
			</div>
			<a class="ml-1 mr-1" target="_blank" href="#"><img width="40" src="img/facebook.svg" alt="facebook"></a>
			<a class="ml-1 mr-1" target="_blank" href="#"><img width="40" src="img/instagram.svg" alt="instagram"></a>
			<a class="ml-1 mr-1" target="_blank" href="#"><img width="40" src="img/twiter.svg" alt="twiter"></a>
			<div class="mt-4 bandeiras">
				<img src="img/eua.png" class="ml-2" alt="Rudolph Foods Company"><a href="#" class="btn-primary">Rudolph Foods Company</a>
				<img src="img/br.png" class="ml-2" alt="Rudolph Foods Brasil"><a href="#" class="btn-primary">Rudolph Foods Brasil</a>
			</div>
			<p class="mt-4 mb-2">
				Rua Fiorelo Badalotti, 451 D - Distrito Industrial. Chapecó-SC - (49) 3330-0300
			</p>
			<a href="politica-de-privacidade"> <small>Política de Privacidade</small></a>
		</div>
		<p class="u-pull-left menor">
			<small>
				<?php auto_copyright();?>
			</small>
		</p>
		<?php
		function auto_copyright($startYear = null) {
			$thisYear = date('Y');
		    if (!is_numeric($startYear)) {
				$year = $thisYear;
			} else {
				$year = intval($startYear);
			}
			if ($year == $thisYear || $year > $thisYear) {
				echo "Copyright &copy; $thisYear - Todos os direitos reservados";
			} else {
				echo "Copyright &copy; $year&ndash;$thisYear - Todos os direitos reservados";
			}
		 }
		 ?>
		<a class="u-pull-right menor" href="https://www.alavanca.digital" target="_blank" rel="noopener"><small>Desenvolvido por Alavanca Sites e Sistemas</small></a>
	</div>
</footer>
