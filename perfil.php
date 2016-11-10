<?php   
  session_start();
  require 'app/Config.inc.php';
  $login = new Login();
  
  if (!$login->CheckLogin()){
    unset($_SESSION['userlogin']);
    header('Location: index.php?exe=restrito');
  
  }
  else{
    $userLogin = $_SESSION['userlogin'];
  }
  
  $busca = new Read();
  $busca->ExeRead("usuario", "WHERE codUsuario = :codUsuario", "codUsuario={$userLogin['codUsuario']}");
  
  $resultado = false;
  
  $form = filter_input_array ( INPUT_POST, FILTER_DEFAULT );
  if ($form && $form ['submit']) {
     	if (isset($_POST['login'])){
     		
     		$dados = [
     				'nome' => $_POST ['nome'],
     				'login' => $_POST ['login'],
     				'senha' => md5($_POST ['senha'])
     		];
     		
     		
     		$update = new Update();
     		$update->ExeUpdate('usuario', $dados, "WHERE codUsuario = :codUsuario", "codUsuario={$userLogin['codUsuario']}");
     			
     		if ($update->getResult()){
     				
     			$resultado = true;
     			$busca->ExeRead("usuario", "WHERE codUsuario = :codUsuario", "codUsuario={$userLogin['codUsuario']}");
     			
     			$_SESSION['userlogin']['nome'] = $_POST ['nome'];
     			
     			header("Refresh:0");
     			
     		}
     		
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
  </head>
  <body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
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
			<li class="active"><a href="perfil.php"><span class="glyphicon glyphicon-edit"></span> Editar Perfil <span class="sr-only">(current)</span></a></li>
			<li><a href="cadastroperfil.php"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Usuário</a></li>
		  </ul>
        </div>
	  </div>
	  
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="container-fluid">
        <h1><span class="glyphicon glyphicon-edit"></span> Editar Perfil</h1>
        
        <?php
		if ($resultado){
		
			MSG("Salvo com sucesso!", RI_MSG_SUCCESS);
		
		}
		?>
        
        <form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="name">Nome:</label>
				<input type="text" name="nome" placeholder="Primeiro Nome" class="form-control" value="<?= $busca->getResult()[0]['nome']; ?>" required>
		    </div>
		    
		    <div class="form-group">
		      <label for="user">Usuário:</label>
		      <input type="text" name="login" placeholder="Usuário" class="form-control" value="<?= $busca->getResult()[0]['login']; ?>" required>
		    </div>

		    <div class="form-group">
		      <label for="user">Senha:</label>
		      <input type="password" name="senha" placeholder="Senha" class="form-control" required>
		    </div>

			<div class="botao">
			<input type="submit" class="btn btn-primary botaoEnviar" name="submit" value="Salvar"/>
			</div>
			
		</form> 
      </div>
    </div>
  </body>
</html>