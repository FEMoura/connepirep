﻿<?php 

require 'app/Config.inc.php';

$resultado = false;
$texto = null;

$form = filter_input_array ( INPUT_POST, FILTER_DEFAULT );
if ($form && $form ['submit']) {

	$file = $_FILES ['publicacao'];
	if ($file ['name']) {
		$upload = new Upload ( 'uploads/' );
		$upload->File ( $file );

		if ($upload->getError()){
			$texto = $upload->getError();
		}

		$dados = [
				'titulo' => $_POST ['titulo'],
				'ano' => $_POST ['ano'],
				'autores' => $_POST ['autores'],
				'ies' => $_POST ['ies'],
				'arquivo' => $upload->getResult(),
				'aprovado' => 'S',
				'area' => $_POST ['area'],
				'keywords' => $_POST ['keywords']
		];

		if($upload->getResult()){
			$cadastra = new Create ();
			$cadastra->ExeCreate ( 'publicacao', $dados );
				
			if ($cadastra->getResult ()) {
				$resultado = true;
			}
				
		}
	}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Repositório CONNEPI</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">

    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

	  <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">
		      	<img alt="Repositório do CONNEPI - Desenvolvido no IFAL" class="img-responsive img" src="assets/images/ifal.jpg">
		      </a>
		    </div>
	  </nav>
		<nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="#" role="button" aria-haspopup="true" aria-expanded="false">Sobre o CONNEPI</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navegar por <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">EDIÇÕES</a></li>
            <li><a href="#">ÁREAS</a></li>
            <li><a href="#">INSTITUIÇÕES</a></li>
          </ul>
        </li>
		 <li><a href="#">Downloads</a></li>
         <li><a href="painel.php">Estatísticas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="submeter.php">Submeter</a></li>
        <li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
      </ul>
  </div>
</nav>

		<div class="container abc">
		
			<?php
			if ($resultado){
			
				MSG("Cadastrado com sucesso!", RI_MSG_SUCCESS);
			
			} else if ($texto != null) {
				MSG($texto, RI_MSG_DANGER);
			}
			?>

			<div class="alert alert-info">
				<p>Obs.: Para disponibilizar sua produção científica no Repositório deve-se submeter a produção através deste formulário. Onde o mesmo deverá ser aprovado pelo administrador do sistema.</p>
				<hr>
				<p>Requisito para submissão:</p>
				<p>I - O formato do arquivo deve ser .PDF</p>
				<p>II - O arquivo não deve exceder o tamanho máximo de 5mb</p>
				<p>III - Todos os campos são obrigatórios</p>
			</div>
			
			<div class="row">
				<div class="text-center">
					<h1 class="h1e">Repositório <span class="ft">CONNEPI</span></h1>
					<h2>Submeter Publicação</h2>
				</div>
		
				<div class="col-md-12 col-lg-12 border-form">
					<form action="" method="post" enctype="multipart/form-data">
		
						<div class="form-group col-lg-12 col-md-12">
					    	<label class="" for="">Título <span class="requisito">*</span>:</label>
							<input type="text" class="form-control inp br" name="titulo" placeholder="Título da Publicação" required>
						</div>
		
						<div class="form-group col-lg-6 col-md-6">
					    	<label class="" for="">Autor(es) <span class="requisito">*</span>:</label>
							<input type="text" class="form-control inp br" name="autores" placeholder="Autor(es)" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6">
					    	<label class="" for="">Palavras-chave <span class="requisito">*</span>:</label>
							<input type="text" class="form-control inp br" name="keywords" placeholder="Palavras-chave" required>
						</div>
						
						<div class="form-group col-lg-12 col-md-12">
					    	<label class="" for="">Instituição <span class="requisito">*</span>:</label>
							<input type="text" class="form-control inp br" name="ies" placeholder="Instituição" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6">
					    	<label class="" for="">Ano <span class="requisito">*</span>:</label>
							<input type="number" class="form-control inp br" name="ano" placeholder="Ex: 2015" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6">
					    	<label class="" for="">Área <span class="requisito">*</span>:</label>
								<select class="form-control inp" name="area" required>
									<option value="Ciências Agrárias" selected>Ciências Agrárias</option>
									<option value="Ciências Biológicas">Ciências Biológicas</option>
									<option value="Ciências da Saúde">Ciências da Saúde</option>
									<option value="Ciências Exatas e da Terra">Ciências Exatas e da Terra</option>	
									<option value="Ciências Humanas">Ciências Humanas</option>
									<option value="Ciências Sociais e Aplicadas">Ciências Sociais e Aplicadas</option>
									<option value="Engenharias">Engenharias</option>
									<option value="Linguística, Letras e Artes">Linguística, Letras e Artes</option>
									<option value="Multidisciplinar">Multidisciplinar</option>
								</select>
						</div>
						
						<div class="form-group col-lg-12 col-md-12">
					    	<label class="" for="">Arquivo <span class="requisito">*</span>:</label>
							<input type="file" class="form-control inp br" name="publicacao" accept="application/pdf" required>
						</div>
								
						<div class="form-group col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
							<input type="submit" class="btn btn-default inp bt-lg br" name="submit" value="Submeter">
						</div>
		
					</form>
		
				</div>
			</div>
		
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="cop">
					<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
				</div>
			</div>
		</div>
	
    	<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>