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
$texto = null;
$category_id = 0;

$form = filter_input_array ( INPUT_POST, FILTER_DEFAULT );
if ($form && $form ['submit']) {
	
	$file = $_FILES ['publicacao'];
	if ($file ['name']) {
		$upload = new Upload ( 'uploads/' );
		$upload->File ( $file );
		
		if ($upload->getError()){
			$texto = $upload->getError();
		}
		
		$dados = [ 
				'titulo' => $_POST ['titulo'],
				'ano' => $_POST ['ano'],
				'autores' => $_POST ['autores'],
				'ies' => $_POST ['ies'],
				//'arquivo' => $upload->getName(),
				'arquivo' => $upload->getResult(),
				'aprovado' => 'S',
				'keywords' => $_POST ['keywords'],
				'area' => $_POST ['area'],
				'category_id' => $category_id
		];
		
		if($upload->getResult()){		
			$cadastra = new Create ();
			require 'app/category_id.php';
			$cadastra->ExeCreate ( 'publicacao', $dados );
			
			if ($cadastra->getResult ()) {
				$resultado = true;
			}
					
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
            <li class="active"><a href="cadastropublicacao.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Publicações <span class="sr-only">(current)</span></a></li>
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
		<h1><span class="glyphicon glyphicon-plus"></span> Cadastro de Publicação</h1>

		<?php
		if ($resultado){
		
			MSG("Cadastrado com sucesso!", RI_MSG_SUCCESS);
		
		} else if ($texto != null) {
			MSG($texto, RI_MSG_DANGER);
		}
		?>
		
		<?php MSG('Todos os campos são obrigatórios!', RI_MSG_INFO) ?>

		<form action="" name="cadExtensao" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="Título">Título:</label>
				<input type="text" name="titulo" placeholder="Título da Publicação" class="form-control"required>
			</div>

			<div class="form-group">
				<label for="Autores">Autor(es):</label>
				<input type="text" name="autores" placeholder="Autor(es)" class="form-control"required>
			</div>
			
			<div class="form-group">
				<label for="keywords">Palavras-Chave:</label>
				<input type="text" name="keywords" placeholder="Palavras-Chave" class="form-control"required>
			</div>

			<div class="form-group">
				<label for="Ano">Ano:</label>
				<input type="text" name="ano" placeholder="Ano" class="form-control"required>
			</div>

		    <div class="form-group">
				<label for="ies">Instituição:</label>
				<input type="text" name="ies" placeholder="Instituição" class="form-control" required>
		    </div>

			<div class="form-group">
				<label for="area">Área:</label>
					<select class="form-control inp" name="area" required>
						<option value="Ciências Agrárias" selected>Ciências Agrárias</option>
						<option value="Ciências Biológicas">Ciências Biológicas</option>
						<option value="Ciências da Saúde">Ciências da Saúde</option>
						<option value="Ciências Exatas e da Terra">Ciências Exatas e da Terra</option>	
						<option value="Ciências Humanas">Ciências Humanas</option>
						<option value="Ciências Sociais e Aplicadas">Ciências Sociais e Aplicadas</option>
						<option value="Engenharias">Engenharias</option>
						<option value="Linguística, Letras e Artes">Linguística, Letras e Artes</option>
						<option value="Multidisciplinar">Multidisciplinar</option>
					</select>
			</div>

		    <div class="form-group">
				<label for="file">Arquivo:</label>
				<input type="file" name="publicacao" accept="application/pdf" class="form-control" required>
		    </div>			

			<div class="botao">
			<input type="submit" class="btn btn-primary botaoEnviar" name="submit" value="Cadastrar"/>
			</div>
			
		</form>
		</div>
	</div>
  </body>
</html>