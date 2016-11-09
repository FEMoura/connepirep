<?php 
	session_start();
	require 'app/Config.inc.php';
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

	<?php
		$valida = false;
		
		$login = new Login();
		if ($login->CheckLogin()){
			header('Location: admin.php');
		}
		
		//filtros em forma de array
		
		$dataLogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		if(!empty($dataLogin['AdminLogin'])){
			
			$login->ExeLogin($dataLogin);
			if (!$login->getResult()){
				//mensagens
				//echo $login->getError()[0];
				$valida = true;
			}
			else{
				header('Location: admin.php');
			}
			
		}
		
		
	?>




	<div class="container abcd">

		<div class="row text-center">
			<!-- <h1>RI<span class="ft">IFAL</span></h1> -->
						

			<div class="col-md-4 col-lg-4 col-xs-12 contor col-lg-offset-4 col-md-offset-4">
			<!-- <h2 class="hh">ÁREA DO ADMINISTRADOR</h2> -->
				<form action="" method="post" name="AdminLoginForm">

					<div class="form-group col-lg-12 col-md-12">
				    	<label class="sr-only" for="">Usuário</label>
						<input type="text" class="form-control i" name="user" placeholder="Usuário" required>
					</div>

					<div class="form-group col-lg-12 col-md-12">
				    	<label class="sr-only" for="">Senha</label>
						<input type="password" class="form-control i" name="pass" placeholder="Senha" required>
					</div>

					<div class="form-group col-lg-12 col-md-12">
						<input type="submit" class="btn btn-default i bt-entrar" name="AdminLogin" value="Entrar">
					</div>

				</form>
				
				<?php 
				if ($valida){
					MSG($login->getError()[0], $login->getError()[1]);
				}
				?>
				

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
  </body>
</html>