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
	
	
	$mensagem = '';
	$tipo = '';
	$excluir = '';
	$excluirTipo = '';
	
	$read = new Read();
	$resultado = true;
	
	$form= filter_input_array(INPUT_POST, FILTER_DEFAULT);
	if($form && $form['submit']){
	
		if (isset($form['submit'])){

			if ((!$_POST['titulo']) && (!$_POST['autores']) && (!$_POST['ano'])){
				$mensagem = "Informe um dos campos para pesquisar!";
				$tipo = RI_MSG_DANGER;		
				
			} 
			else if (($_POST['titulo'])){
				//echo "Título";
				
				
				$read->FullRead("SELECT * FROM publicacao WHERE titulo LIKE :like AND aprovado = 'S'", "like=%{$_POST['titulo']}%");
				if(!$read->getResult()){
					$resultado = false;
				}
				
			}
			else if (($_POST['autores'])){
				//echo "Autores";
	
				$read->FullRead("SELECT * FROM publicacao WHERE autores LIKE :like AND aprovado = 'S'", "like=%{$_POST['autores']}%");
				if(!$read->getResult()){
					$resultado = false;
				}
				
			}
			else if (($_POST['ano'])){
				//echo "Ano";
								
				$read->FullRead("SELECT * FROM publicacao WHERE ano LIKE :like AND aprovado = 'S'", "like={$_POST['ano']}%");
				if(!$read->getResult()){
					$resultado = false;
				}
				
			}
			
		}
		
		
		
		
	}
	
	if (isset($_GET['e'])){
	
		$e = $_GET['e'];
	
	
		$delete = new Delete();
		$delete->ExeDelete('publicacao', 'WHERE id= :id', "id={$e}");
	
	
		if ($delete->getResult()){
			
			$excluir = 'Removido com sucesso!';
			$excluirTipo = RI_MSG_SUCCESS;
			
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
		function confirmar(){
			var x = confirm("Deseja realmente excluir?");
			if(x == true){
				return true;
			}
			else
				return false;
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			$('#tb1').dataTable({
				// "bJQueryUI": true,
				// "sPaginationType": "full_numbers",
				// "sDom": '<"H"Tlfr>t<"F"ip>',
				"oLanguage": {
					"sLengthMenu": "Registros/Página _MENU_",
					"sZeroRecords": "Nenhum registro encontrado",
					"sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
					"sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
					"sInfoFiltered": "(filtrado de _MAX_ registros)",
					"sSearch": "Pesquisar: ",
					"oPaginate": {
						// "sFirst": " Primeiro ",
						"sPrevious": " Anterior ",
						"sNext": " Próximo ",
						// "sLast": " Último "
					}
				},
				"aaSorting": [[0, 'desc']],
				"aoColumnDefs": [ {"sType": "num-html", "aTargets": [0]} ]
			});

		});
	</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
			<h1><span class="glyphicon glyphicon-search"></span> Pesquisar Publicações</h1>
			<h4>Lista de publicações cadastradas</h4>
		
		<?php MSG('Informe apenas um dos campos para pesquisar', RI_MSG_WARNING) ?>
		
	<form action="listaPublicacao.php" name="cadPublicacao" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="Título">Título:</label>
			<input type="text" name="titulo" placeholder="Título da Publicação" class="form-control">
	    </div>

		<div class="form-group">
			<label for="Autores">Autor(es):</label>
			<input type="text" name="autores" placeholder="Autor(es)" class="form-control">
	    </div>

	    <div class="form-group">
			<label for="Ano">Ano:</label>
			<input type="text" name="ano" placeholder="Ano" class="form-control">
	    </div>
		
		<div class="botao">
		<input type="submit" class="btn btn-primary botaoEnviar" name="submit" value="Pesquisar" />
		</div>
	</form>
	
	<div class="col-lg-12 col-xs-12">
		<?php 
		if ($mensagem != ''){
			MSG($mensagem, $tipo);
			$excluir = '';
			$excluirTipo = '';
		}
	    ?>
	</div>
		
	<div class="col-lg-12 col-xs-12">
		<?php 
		if ($excluirTipo != ''){
			MSG($excluir, $excluirTipo);
			$mensagem = '';
			$tipo = '';
		}
		?>
	</div>
	
	<div class="col-lg-12 col-xs-12 nfound">
		<?php 
		if (!$resultado){
				
			MSG("Nenhum resultado encontrado!", RI_MSG_DANGER);
		
		}
		?>
	</div>
	
	<hr>
	
	<?php
		if ($read->getResult()){
	echo'
	<table class="table table-striped" border="0" id="tb1">
		<thead>
			<th style="text-align:center;">Ano</th>
			<th style="text-align:center;">Título</th>
			<th style="text-align:center;">Autor(es)</th>
			<th style="text-align:center;">Editar</th>
			<th style="text-align:center;">Excluir</th>
		</thead>
		<tbody>';
				
				foreach ($read->getResult() as $pub){
					echo '<tr>';
						echo '<td style="text-align:center;">'.$pub['ano'].'</td>';
						echo '<td style="text-align:center;">'.$pub['titulo'].'</td>';
						echo '<td style="text-align:center;">'.$pub['autores'].'</td>';
						echo '<td style="text-align:center;"><a href="editarPublicacao.php?id='.$pub['id'].'" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>';
						echo '<td style="text-align:center;"><a onclick="return confirmar();" href="listaPublicacao.php?e='.$pub['id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							 </td>';
					echo '</tr>';
				
				}
	echo'			
		</tbody>
	</table>';

		}
	?>
 </div>
</div>
  </body>
</html>