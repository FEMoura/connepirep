<?php 

require 'app/Config.inc.php';

if (isset($_GET['id'])){
	
	$id = $_GET['id'];
	$read = new Read();
			
	$read->FullRead("SELECT * FROM publicacao WHERE id = $id");
			
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
		<a class="navbar-brand" href="index.php">
		<img alt="Repositório do CONNEPI - Desenvolvido no IFAL" class="img-responsive img" src="assets/images/HEAD.png">
		</a>
	</div>
</nav>

<!-- navbar principal -->

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
		<li><a href="index.php">Página Inicial</a></li>
        <li><a href="about.php">Sobre o CONNEPI</a></li>
		<li><a href="colections.php">Comunidades e Coleções</a><li>
		<li><a href="download.php">Downloads</a></li>
        <li><a href="painel.php">Estatísticas</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="submeter.php">Submeter</a></li>
        <li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
    </ul>
</nav>

<div class="container">
	<h1 class="detalhes">Detalhes:</h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 view">


			<?php
				if ($read->getResult()){
					foreach ($read->getResult() as $b){

						echo '
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="col-lg-2 col-md-2"><p class="title">Título:</p></div>
								<div class="col-lg-10 col-md-10"><p>'.$b['titulo'].'</p></div>
							</div>
						</div>';
						
						echo '
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="col-lg-2 col-md-2"><p class="title">Autor(es):</p></div>
								<div class="col-lg-10 col-md-10"><p>'.$b['autores'].'</p></div>
							</div>
						</div>';
											
						echo '
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="col-lg-2 col-md-2"><p class="title">Instituição:</p></div>
								<div class="col-lg-10 col-md-10"><p>'.$b['ies'].'</p></div>
							</div>
						</div>';
												
						echo '
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="col-lg-2 col-md-2"><p class="title">Ano:</p></div>
								<div class="col-lg-10 col-md-10"><p>'.$b['ano'].'</p></div>
							</div>
						</div>';
						
						echo '
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="col-lg-2 col-md-2"><p class="title">Área:</p></div>
								<div class="col-lg-10 col-md-10"><p>'.$b['area'].'</p></div>
							</div>
						</div>';
						
					}
				}
			?>
	

	<hr>
	
	<iframe src="uploads/<?php echo $b['arquivo']; ?>" width="100%" height="1000" style="border: none;" download="<?php echo 'RIIFBA-'.$b['ano'].'-'.$b['id'];?>"></iframe>
	
	<br>
	<hr>
	<div class="col-lg-12 col-md-12 download">
		<a href="uploads/<?php echo $b['arquivo']; ?>" class="btn btn-success btn-lg" target="__blank" download="<?php echo 'CONNEPI-'.$b['ano'].'-'.$b['id'];?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
	</div>




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