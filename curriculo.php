	<?PHP

	/* Selecinando os dados do Banco de dados */
	$sql = "SELECT * FROM curriculo,cursos";
	/* Buscandoo limite da tabela para exibição */
	$limite = mysql_query($sql) or die(mysql_error());
	/* Exibe a os dados na tela */
	while ($sql = mysql_fetch_array($limite)) {
		$endereco = $sql["endereco"];
		$experiencias = $sql["experiencias"];
		$formacao = $sql["formacao"];
		$habilidades = $sql["habilidades"];
		$idiomas = $sql["idiomas"];
		$nome = $sql["nome"];
		$rua = $sql["Rua"];
		$perfil = $sql["perfil"];
		$telefone = $sql["telefone"];
		$designresponsivo = $sql['designresponsivo'];
		$java = $sql['java'];
		$frontend = $sql['frontend'];
		$bancodados = $sql['bancodados'];
		$uml = $sql['uml'];
		$dotnet = $sql['dotnet'];
	}

	/* Exibindo o conteudo obitido'*/

	?>
	<div class="conteiner">
		<h1><?php echo utf8_encode($nome); ?></h1>

		<h4>Perfil Profissional:</h4>
		<p><?php echo utf8_encode($perfil) ; ?></p>
		<h4>Formação Escolar:</h4>

		<p><?php echo utf8_encode($formacao) ; ?></p>

		<h4>Cursos Extracurriculares:</h4>

		<dl>
			<dt>Design Responsivo</dt>
			<dd><?php echo utf8_encode($designresponsivo); ?></dd>


			<dt>Programação Orientada a Objetos (Java)</dt>
			<dd><?php echo utf8_encode($java); ?></dd>

			<dt>Desenvolvimento Web (Front - End) CSS, HTML, JavaScript, JQuery) </dt>
			<dd><?php echo utf8_encode($frontend); ?></dd>

			<dt>Banco de dados (MYSQL-server)</dt>
			<dd><?php echo utf8_encode($bancodados); ?></dd>

			<dt>Projeto de sistemas (UML)</dt>
			<dd><?php echo utf8_encode($uml); ?></dd>
			<dt>Programação .Net</dt>
			<dd><?php echo utf8_encode($dotnet); ?></dd>

		</dl>







	</div><!--CONTEINER-->

