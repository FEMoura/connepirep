<!DOCTYPE html>
<html lang="pt-br">

<?php require 'app/Config.inc.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">
	<link href="assets/css/locastyle.css" rel="stylesheet">
	
	<title>Repositório CONNEPI</title>
	<link rel="shortcut icon" type="image/x-icon" href="if.png"> </link>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
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
		<li><a href="colections.php">Comunidades e Coleções</a></li>
		<li><a href="download.php">Downloads</a></li>
        <li><a href="painel.php">Estatísticas</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="submeter.php">Submeter</a></li>
        <li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
    </ul>
</nav>

<body>
<div class="container">
	<div class="row">
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2006</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2006.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2006.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
		</div>
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2007</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2007.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2007.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
		</div>
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2008</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2008.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2008.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
		</div>
	</div>
	<div class="row">
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2009</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2009.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2009.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
		</div>
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2010</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2010.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2010.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
		</div>
		<div class="ls-box col-md-4 download">
			<h5 class="ls-title-3">CONNEPI 2011</h5>
				<p><img src="assets/images/connepi2006.png"></p>
					<a href="uploads/connepi2011.rar" class="btn btn-success btn-lg" target="__blank" download="CONNEPI2011.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a>
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

					<!-- JS -->
					
	<script src="assets/js/locastyle.js"></script>
    <script src="assets/js/jquery-2.1.4.min.js"></script>

<!---------------------------------------------------------->

</body>

</html>
