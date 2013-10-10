
	<?PHP

	/* Selecinando os dados do Banco de dados */
	$sql = "SELECT * FROM hobbies";
	/* Buscandoo limite da tabela para exibição */
	$limite = mysql_query($sql) or die(mysql_error());
	/* Exibe a os dados na tela */
	while ($sql = mysql_fetch_array($limite)) {
		$webdesign = $sql["webdesign"];
		$javascript = $sql["javascrip"];
		$css = $sql["css"];
		$php = $sql["php"];
		}

/* Exibindo o conteudo obitido'*/

		?>

<div class="conteiner">

		<dl class="hobbies">
			<dt>Web Design</dt>
			<dd><?php echo utf8_encode($webdesign); ?></dd>

			<dt>JavaScript</dt>
			<dd><?PHP echo utf8_encode($javascript);?></dd>

			<dt>Css</dt>
			<dd><?php echo utf8_encode($css) ;?></dd>

			<dt>PHP</dt>
			<dd><?php echo utf8_encode($php);?></dd>

		</dl>

	</div><!--CONTEINER-->







