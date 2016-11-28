<!DOCTYPE html>
<html lang="pt-br">

<?php require 'app/Config.inc.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">
	
	<title>Repositório CONNEPI</title>
	<link rel="icon" href="assets/images/if.png"></link>

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
		<li><a href="submeter.php"><span class="glyphicon glyphicon-cloud-upload"></span> Submeter</a></li>

<?php
session_start();
$login = new Login();
if(!$login->CheckLogin()){
		unset($_SESSION['userlogin']);
	echo '<li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>';
	}
else
	{
	echo '<li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ADMIN</a></li>';
	}
?>
    </ul>
</nav>

<body>
<div class="geral">
	<div class="container">
		<?php MSG('Nessa página são disponibilizados os anais completos das edições do CONNEPI', RI_MSG_INFO) ?>
		<div class="panel panel-default download">
			<ul class="media-list">
				<li><h3><a href="uploads/connepi2006.rar" target="__blank" download="CONNEPI2006.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2006 no Rio Grande do Norte</a></li></h3>
				<li><h3><a href="uploads/connepi2007.rar" target="__blank" download="CONNEPI2007.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2007 na Paraíba</a></li></h3>
				<li><h3><a href="uploads/connepi2008.rar" target="__blank" download="CONNEPI2008.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2008 no Ceará</a></li></h3>
				<li><h3><a href="uploads/connepi2009.rar" target="__blank" download="CONNEPI2009.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2009 no Pará</a></li></h3>
				<li><h3><a href="uploads/connepi2010.rar" target="__blank" download="CONNEPI2010.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2010 em Alagoas</a></li></h3>
				<li><h3><a href="uploads/connepi2011.rar" target="__blank" download="CONNEPI2011.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2011 no Rio Grande do Norte</a></li></h3>
				<li><h3><a href="uploads/connepi2012.rar" target="__blank" download="CONNEPI2012.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2012 no Tocantins</a></li></h3>
				<li><h3><a href="uploads/connepi2013.rar" target="__blank" download="CONNEPI2013.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2013 na Bahia</a></li></h3>
				<li><h3><a href="uploads/connepi2014.rar" target="__blank" download="CONNEPI2014.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2014 no Maranhão</a></li></h3>
				<li><h3><a href="uploads/connepi2015.rar" target="__blank" download="CONNEPI2015.rar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Anais do CONNEPI 2015 no Acre</a></li></h3>
			</ul>
		</div>
	</div>
</div>
<footer class="container-fluid">
	<div class="row">
		<div class="cop">
			<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
		</div>
	</div>
</footer>

					<!-- JS -->
					
    <script src="assets/js/jquery-2.1.4.min.js"></script>

<!---------------------------------------------------------->

</body>

</html>
