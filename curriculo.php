	<?PHP

	/* Selecinando os dados do Banco de dados */
	$sql = "SELECT * FROM curriculo";
	/* Buscandoo limite da tabela para exibição */
	$limite = mysql_query($sql) or die(mysql_error());
	/* Exibe a os dados na tela */
	while ($sql = mysql_fetch_array($limite)) {
		$cursos = $sql["cursos"];
		$endereco = $sql["endereco"];
		$experiencias = $sql["experiencias"];
		$formacao = $sql["formacao"];
		$habilidades = $sql["habilidades"];
		$idiomas = $sql["idiomas"];
		$nome = $sql["nome"];
		$rua = $sql["Rua"];
		$perfil = $sql["perfil"];
		$telefone = $sql["telefone"];
	
		}

/* Exibindo o conteudo obitido'*/

		?>
		<div class="conteiner">
			<h1><?php echo $nome; ?></h1>

			<h4>Perfil Profissional:</h4>
			<p><?php echo $perfil; ?></p>
			<h4>Formação Escolar:</h4>

			<p><?php echo $formacao; ?></p>

				<h4>Cursos Extracurriculares:</h4>

				<dl>
					<dt>Design Responsivo</dt>
					<dd>Em andamento
						Instituição: Treina Web</dd>


					<dt>Programação Orientada a Objetos (Java)</dt>
										<dd>Período: Fev/2013 à Jun/2013
											Instituição: Faculdade Anhanguera.</dd>

					<dt>Desenvolvimento Web (Front - End) CSS, HTML, JavaScript, JQuery)  
										<dd>Período: Jan/2013
											Instituição: Faculdade Una.</dd>

					<dt>Banco de dados (MYSQL-server)</dt>
										<dd>Período: Jul/2012 à Nov/2012
											Instituição: Faculdade Anhanguera.</dd>

					<dt>Projeto de sistemas (UML)</dt>
										<dd>Período: Jul/2012 à Nov/2012
											Instituição: Faculdade Anhanguera</dd>

					</dl>







				</div><!--CONTEINER-->

	