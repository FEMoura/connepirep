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
	<link href="assets/css/locastyle.css" rel="stylesheet">
    <script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/high.js"></script>
	<script src="assets/js/highex.js"></script>
	<script src="assets/js/graphs.js"></script>
	<script src="assets/js/locastyle.js"></script>
    
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

<!-- Aqui começa o conteúdo -->

<div class="container-fluid">
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
 </div>
 
<!-- Rodapé -->
   <div class="container-fluid">
			<div class="row">
				<div class="cop">
					<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
				</div>
			</div>
		</div>
    </main>  
  </body>
</html>