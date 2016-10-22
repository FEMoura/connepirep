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
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/chartist.min.js"></script>
	<script src="assets/js/high.js"></script>
	<script src="assets/js/highex.js"></script>
	<script src="assets/js/graphs.js"></script>
    <link href="assets/css/chartist.min.css" rel="stylesheet" type="text/css">
    
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
        <li class="li-login"><a href="admin.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
      </ul>
  </div>
</nav>
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-dashboard">Dashboard</h1>
		
<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <p class="ls-float-right ls-float-none-xs ls-small-info"><strong></strong></p>
    <h2 class="ls-title-3">Gráficos</h2>
  </header>
  <div id="ano" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 
 </div>
 
 <div class="ls-box ls-board-box">
  <div id="ano3" style="min-width:310px; height: 400px; margin: 0 auto"></div>
 </div>
 
 <div class="ls-box ls-board-box">
  <div id="ano4" style="min-width:310px; height: 800px; margin:0 auto"></div>
 </div>
 
<!-- ---------------- -->
    </div>
      <?php require_once('footer.php');?>
    </main>

    
    <?php require_once('assets-footer.php');?>

  </body>
</html>