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
	
	$resultado = false;
	$texto = null;
	
	if (isset($_GET['id'])){
		
		$i = $_GET['id'];
		
		$busca = new Read();
		$busca->ExeRead("publicacao", "WHERE id = :id", "id={$i}");
		
	}
	
		
if (isset($_POST['titulo'])){	
	//$form= filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//if($form && $form['submit']){
	
	
		$file = $_FILES['publicacao'];
		if ($file['name']){
			
			//$pdf = substr($busca->getResult()[0]['arquivo'], 0, strrpos($busca->getResult()[0]['arquivo'], '.'));
						
			//unlink("uploads/{$pdf}");
			
			
						
			
			$upload = new Upload('uploads/');
			$upload->File($file);
			
			//se deu errado
			if ($upload->getError()){
				$texto = $upload->getError();
			}
			//se deu certo
			else {
				unlink("uploads/{$busca->getResult()[0]['arquivo']}");
				
				$dados = [
						'titulo' => $_POST ['titulo'],
						'ano' => $_POST ['ano'],
						'autores' => $_POST ['autores'],
						'area' => $_POST ['area'],
						'arquivo' => $upload->getResult()
				];
										
				$update = new Update();
				$update->ExeUpdate('publicacao', $dados, "WHERE id = :id", "id={$i}");
					
				if ($update->getResult()){
					
					$resultado = true;
					//echo "{$update->getRowCount()} dados atualizados com sucesso! <hr>";
					//header("Location:editarPesquisa.php?id=$i");
					$busca->ExeRead("publicacao", "WHERE id = :id", "id={$i}");
				
				}
				
			}

			
		} else {
			
			$dados = [
					'titulo' => $_POST ['titulo'],
					'ano' => $_POST ['ano'],
					'autores' => $_POST ['autores'],
					'area' => $_POST ['area']
			];
								
			$update = new Update();
			$update->ExeUpdate('publicacao', $dados, "WHERE id = :id", "id={$i}");
				
			if ($update->getResult()){
				$resultado = true;
				//echo "{$update->getRowCount()} dados atualizados com sucesso! <hr>";
				//header("Location:editarPesquisa.php?id=$i");
				$busca->ExeRead("publicacao", "WHERE id = :id", "id={$i}");
			
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
       <a class="navbar-brand">Painel do Administrador</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
			<li><a href="index.php">Página Inicial</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
			<li><a href="perfil.php">Perfil</a></li>
            <li><a href="logout.php">Sair</a></li>
		</ul>
      </div>
    </nav>
		<div class="container-fluid">
		 <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">
			<li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Página Principal</a></li>
           </ul>
           <ul class="nav nav-sidebar">
			<li class="active"><a href="listapublicacao.php"><span class="glyphicon glyphicon-list-alt"></span> Publicações <span class="sr-only">(current)</span></a></li>
            <li><a href="cadastropublicacao.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Publicações</a></li>
            <li><a href="sub.php"><span class="glyphicon glyphicon-upload"></span> Submissões</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="perfil.php"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
            <li><a href="cadastroperfil.php"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Usuário</a></li>
          </ul>
        </div>
	  </div>
	  
<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1><span class="glyphicon glyphicon-pencil"></span> Editar Publicação</h1>
        
<?php
	if ($resultado){
		MSG("Atualizado com sucesso!", RI_MSG_SUCCESS);
   }else if ($texto != null) {
		MSG($texto, RI_MSG_DANGER);
}?>

	<form action="editarPublicacao.php?id=<?= $i ?>" name="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="Título">Título:</label>
		    <input type="text" name="titulo" placeholder="Título da Publicação" value="<?php echo $busca->getResult()[0]['titulo']; ?>" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label for="Autores">Autor(es):</label>
		    <input type="text" name="autores" placeholder="Autor(es)" value="<?php echo $busca->getResult()[0]['autores']; ?>" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label for="Ano">Ano:</label>
		    <input type="number" name="ano" placeholder="Ex: 2015" value="<?php echo $busca->getResult()[0]['ano']; ?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="Area">Área:</label>
		    <input type="text" name="area" placeholder="Área" class="form-control" value="<?php echo $busca->getResult()[0]['area']; ?>" required>
		</div>
		
		<div class="form-group">
		    <label for="Arquivo">Arquivo:</label>
		    <input type="file" name="publicacao" accept="application/pdf" class="form-control">
		</div>			

		<div class="botao">
		<input type="submit" class="btn btn-primary botaoEnviar" name="submit" value="Atualizar"/>
		</div>
	</form>
	
	</div>
</div>
</body>
</html>