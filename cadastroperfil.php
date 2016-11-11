<?php
session_start ();
require 'app/Config.inc.php';
$login = new Login ();

if (! $login->CheckLogin ()) {
	unset ( $_SESSION ['userlogin'] );
	header ( 'Location: index.php?exe=restrito' );
} else {
	$userLogin = $_SESSION ['userlogin'];
}

$resultado = false;

$form = filter_input_array ( INPUT_POST, FILTER_DEFAULT );
if ($form && $form ['submit']) {
		
		$dados = [ 
				'nome' => $_POST ['nome'],
				'login' => $_POST ['login'],
				'senha' => md5($_POST ['senha']),
		];
		
		$cadastra = new Create();
		$cadastra->ExeCreate ( 'usuario', $dados );
			
			if ($cadastra->getResult ()) {
				$resultado = true;
			}
					
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/if.png">

    <title>Repositório CONNEPI - Página do Administrador</title>

    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
	
<script type="text/javascript">
	function validaCampo()
{
if(document.cadastro.nome.value=="")
	{
	alert("O campo Nome é obrigatório!");
	return false;
	}
else
	if(document.cadastro.login.value=="")
	{
	alert("O campo Usuário é obrigatório!");
	return false;
	}
else	
if(document.cadastro.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}
else
return true;
}
</script>
  </head>
  
  <body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Painel do Administrador</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Página Inicial</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="perfil.php">Perfil</a></li>
            <li><a href="logout.php">Sair</a></li>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Página Principal</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="listapublicacao.php"><span class="glyphicon glyphicon-list-alt"></span> Publicações</a></li>
            <li><a href="cadastropublicacao.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Publicações</a></li>
            <li><a href="sub.php"><span class="glyphicon glyphicon-upload"></span> Submissões</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="perfil.php"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
            <li class="active"><a href="cadastroperfil.php"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Usuário <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
	  </div>
	  
	  <div class="container-fluid">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1><span class="glyphicon glyphicon-plus-sign"></span> Cadastro de Usuários</h1>
		
		<?php if ($resultado){MSG("Cadastrado com sucesso!", RI_MSG_SUCCESS);} ?>
		<?php MSG('Todos os campos são obrigatórios!', RI_MSG_INFO) ?>
		
			<form action="" name="cadUsuario" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="Nome">Nome:</label>
					<input type="text" name="nome" placeholder="Primeiro Nome" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="Usuário">Usuário:</label>
					<input type="text" name="login" placeholder="Usuário" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="Ano">Senha:</label>
					<input type="password" name="senha" placeholder="Digite uma Senha" class="form-control" required>
				</div>
			
				<div class="botao">
					<input type="submit" class="btn btn-primary botaoEnviar" name="submit" value="Cadastrar"/>
				</div>
			
			</form>
		</div>
	</div>
  </body>
</html>