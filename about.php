<?php require 'app/Config.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/if.png">

    <title>Repositório CONNEPI</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/repositorio1.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/images/connepi-alagoas.png" alt="First slide">
		  <div class="container">
			<div class="carousel-caption">
			  <p><a class="btn btn-lg btn-primary" href="http://connepi.ifal.edu.br/2016/" role="button">Ir para o site &raquo;</a></p>
			</div>
		  </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/images/local.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
			<p><h3>Local do evento:</h3></p>
              <p><a class="btn btn-lg btn-primary" href="https://www.google.com.br/maps/dir/Aeroporto+Internacional+de+Macei%C3%B3+-+Zumbi+dos+Palmares,+Rio+Largo+-+AL/Ritz+Lagoa+da+Anta+-+Av.+Brigadeiro+Eduardo+Gomes+de+Brito,+546+-+Lagoa+da+Anta,+Macei%C3%B3+-+AL,+57038-230/@-9.5819745,-35.8210194,12z/data=!4m14!4m13!1m5!1m1!1s0x701364e4d0e2d31:0xcdb6032e48716fc5!2m2!1d-35.7913635!2d-9.5128509!1m5!1m1!1s0x70145d2d07808f1:0x9e24a4e01542c37c!2m2!1d-35.6988233!2d-9.6392722!5i1" role="button">Ver mapa &raquo;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="assets/images/connepi-alagoas.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
			<p><h3>RESULTADO DOS ARTIGOS:</h3></p>
              <p><a class="btn btn-lg btn-primary" href="http://connepi.ifal.edu.br/2016/resultado.php" role="button">Ver lista &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="geral">
    <div class="container marketing">
	
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">O Congresso Norte Nordeste de Pesquisa e Inovação: <span class="text-muted">CONNEPI</span></h2>
          <p class="lead">O CONNEPI  tem se consolidado como grande incentivador dos projetos científicos desenvolvidos pelos Institutos Federais da Rede Norte-Nordeste. O evento, que a cada edição desde 2006 traz um tema diferente, tem reunido além da comunidade acadêmica, diferentes setores da sociedade, como empresários, governantes, grupos culturais, na expectativa de cumprir o papel da pesquisa: expandi-la além dos muros da academia.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/img2.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">O evento em uma palavra: <span class="text-muted">Impactante!</span></h2>
          <p class="lead">De uma ideia em 2006 a um sucesso em 2016. O CONNEPI chega a sua 11ª edição esse ano, e podemos resumir a sua participação na comunidade acadêmica, principalmente no âmbito dos Institutos Federais, com uma palavra: Impactante. A cada edição o evento cresceu e permitiu aos alunos dos Institutos Federais, tanto do ensino médio/técnico quanto do ensino superior, apresentarem o resultado das suas pesquisas e ingressar mais cedo na comunidade acadêmica.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="assets/images/img1.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">O Repositório: <span class="text-muted">Preservando o conhecimento e a história.</span></h2>
          <p class="lead">Os artigos apresentados no evento representam o esforço de todos os organizadores e alunos, e isso não poderia ser esquecido. Esse repositório foi desenvolvido com o objetivo de organizar e disponibilizar os artigos de todas as edições do CONNEPI, tendo em vista que o evento não possui um repositório oficial e as publicações se encontravam dispersas na internet. Desta forma, auxiliando para que o conhecimento gerado pelos resultados das pesquisas apresentados no CONNEPI continue sendo difundido e marcando a história de todos os envolvidos.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/img3.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

      <!-- FOOTER -->
	
	<footer class="container-fluid">
	<div class="row">
		<div class="cop">
			<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
		</div>
	</div>
	</footer>
</div><!-- /.geral -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-2.1.4.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
