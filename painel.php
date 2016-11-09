<?php 	
	require 'app/Config.inc.php';

	$readPublicacao = new Read();
	$readPublicacao->FullRead("SELECT COUNT(*) FROM publicacao WHERE aprovado = 'S'");
	
?>
<!DOCTYPE html>
<html class="ls-theme-green ls-html-nobg">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repositório CONNEPI</title>
	<?php require_once('assets.php');?>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio1.css" rel="stylesheet">
    
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

<!-- Aqui começa o conteúdo -->

 <h1 class="ls-title-intro ls-ico-dashboard">Dashboards</h1>
	<ul class="ls-tabs-nav">
		<li class="ls-active"><a data-ls-module="tabs" href="#abaano">Publicações por Ano</a></li>
		<li><a data-ls-module="tabs" href="#anoarea">Publicações por Área/Ano</a></li>
		<li><a data-ls-module="tabs" href="#areano">Publicações por Ano/Área</a></li>
		<li><a data-ls-module="tabs" href="#if1">Publicações por IF/Ano</a></li>
		<li><a data-ls-module="tabs" href="#if2">Publicações por Ano/IF</a></li>
	</ul>
	<div class="ls-tabs-container">
	
<!-- Aba 1 -->

		<div id="abaano" class="ls-tab-content ls-active">
			<div class="ls-box ls-board-box">
			<div id="ano" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div>
		</div>

<!-- Aba 2 -->

		<div id="anoarea" class="ls-tab-content">
			<div class="ls-box ls-board-box">
			<div id="ano3" style="width:1200px; height: 400px; margin: 0 auto"></div>
			</div>
		</div>

<!-- Aba 3 -->		
 
		<div id="areano" class="ls-tab-content">
			<div class="ls-box ls-board-box">
			<div id="ano4" style="width:1200px; height: 1200px; margin:0 auto"></div>
			</div>
		</div> 

<!-- Aba 4 -->

		<div id="if1" class="ls-tab-content">
			<div class="ls-box ls-board-box">
			<div id="ifano" style="width:1200px; height: 400px; margin:0 auto"></div>
			</div>
		</div>
		
<!-- Aba 5 -->
		
		<div id="if2" class="ls-tab-content">
			<div class="ls-box ls-board-box">
			<div id="anoif" style="width:1200px; height: 1200px; margin:0 auto"></div>
			</div>
		</div>
	</div>
 
<!-- Rodapé -->
   <div class="container-fluid">
		<div class="row">
			<div class="cop">
				<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
			</div>
		</div>
	</div>

<!-- JS -->

	<script src="assets/js/high.js"></script>
	<script src="assets/js/highex.js"></script>
	<script src="assets/js/graphs.js"></script>
	<script src="assets/js/locastyle.js"></script>
<!-------------------------------------------------->
    </body>  
</html>