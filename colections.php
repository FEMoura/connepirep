<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
require 'app/Config.inc.php';
?>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">
	<script src="assets/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
  $('.disable > ul').hide();
  
  $('.disable h4').click(function() {
    $(this).next().toggle('slow, 1000');
  });
 });
</script>
	<title>Repositório CONNEPI</title>
	<link rel="icon" href="assets/images/if.png"></link>

  </head>
  <body>
	<!-- navbar da brand -->
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
<div class="geral">
	<div class="container colections">
	<h1>Comunidades e Coleções</h1>
	<h4>Clique no nome de uma comunidade para exibir suas coleções e no nome da coleção para visualizar os seus dados.</h4>
		<div class="panel panel-primary colection">
			<ul class="media-list">
				<li class="disable">
					<div class="disable">
						<h4 class="disable">- CONNEPI 2006 <span class="label label-success label-as-badge">276</span></h4>
							<ul id="comunidade1">
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=1"><aaa)> Ciências Agrárias [9]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=2"><aab)> Ciências Biológicas [60]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=3"><aae)> Ciências da Saúde [7]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=4"><aac)> Ciências Exatas e da Terra [43]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=5"><aad)> Ciências Humanas [50]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=6"><aaf)> Ciências Sociais e Aplicadas [47]</h5></a>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=7"><aag)> Engenharias [60]</a></h5>
									</div>
								</li>
							</ul>
					</div>
				</li>
				<li class="disable">
					<div class="disable">
						<h4 class="disable">- CONNEPI 2007 <span class="label label-success label-as-badge">311</span></h4>
							<ul id="comunidade2">
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=8"><aaa)> Ciências Agrárias [17]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=9"><aab)> Ciências Biológicas [22]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=10"><aac)> Ciências da Saúde [14]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=11"><aad)> Ciências Exatas e da Terra [74]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=13"><aae)> Ciências Humanas [15]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=12"><aaf)> Ciências Sociais e Aplicadas [58]</h5></a>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=14"><aag)> Engenharias [110]</a></h5>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=15"><aah)> Linguística, Letras e Artes [01]</a></h5>
									</div>
								</li>
							</ul>
					</div>
				</li>
				<li class="disable">
					<div class="disable">
						<h4 class="disable">- CONNEPI 2008 <span class="label label-success label-as-badge">438</span></h4>
							<ul id="comunidade3">
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=16"><aaa)> Ciências Biológicas [113]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=17"><aab)> Ciências Exatas e da Terra [130]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=18"><aac)> Ciências Humanas [99]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=19"><aad)> Ciências Sociais e Aplicadas [21]</h5></a>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=20"><aae)> Engenharias [55]</a></h5>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=21"><aaf)> Linguística, Letras e Artes [20]</a></h5>
									</div>
								</li>
							</ul>
					</div>
				</li>
				<li class="disable">
					<div class="disable">
						<h4 class="disable">- CONNEPI 2009 <span class="label label-success label-as-badge">1044</span></h4>
							<ul id="comunidade4">
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=22"><aaa)> Ciências Agrárias [98]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=23"><aab)> Ciências Biológicas [66]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=24"><aae)> Ciências da Saúde [40]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=25"><aac)> Ciências Exatas e da Terra [149]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=26"><aad)> Ciências Humanas [131]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=27"><aaf)> Ciências Sociais e Aplicadas [115]</h5></a>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=28"><aag)> Engenharias [244]</a></h5>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=29"><aag)> Linguística, Letras e Artes [28]</a></h5>
									</div>
								</li>
							</ul>
					</div>
				</li>
				<li class="disable">
					<div class="disable">
						<h4 class="disable">- CONNEPI 2010 <span class="label label-success label-as-badge">1028</span></h4>
							<ul id="comunidade5">
															<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=30"><aaa)> Ciências Agrárias [139]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=31"><aab)> Ciências Biológicas [68]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=32"><aae)> Ciências da Saúde [35]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=33"><aac)> Ciências Exatas e da Terra [150]</h5></a>
									</div>
								</li>
								<li class="disable">
									<div class="disable">
										<h5 class="disable"><a href="viewcolection.php?category_id=34"><aaf)> Ciências Sociais e Aplicadas [225]</h5></a>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=35"><aag)> Engenharias [162]</a></h5>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=36"><aag)> Linguística, Letras e Artes [43]</a></h5>
									</div>
								</li>
								<li>
									<div>
										<h5><a href="viewcolection.php?category_id=37"><aag)> Multidisciplinar [204]</a></h5>
									</div>
								</li>
							</ul>
					</div>
				</li>
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
<!-- JavaScript no fim para carregar as páginas mais rapidamente-->
	
    	<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>
