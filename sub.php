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
	
	$excluir = '';
	$excluirTipo = '';
	$aprovado = false;
	
	$read = new Read();
	$read->ExeRead('publicacao', 'WHERE aprovado = :aprovado', 'aprovado=N');
	
	//aprovar
	if (isset($_GET['id'])){
		
		$i = $_GET['id'];
		
		$dados = [
				'aprovado' => 'S'
		];
		
		$update = new Update();
		$update->ExeUpdate('publicacao', $dados, "WHERE id = :id", "id={$i}");
		
		if ($update->getResult()){
			$aprovado = true;
			
			$read->ExeRead('publicacao', 'WHERE aprovado = :aprovado', 'aprovado=N');
		}
		
	}
	
	//deletar
	if (isset($_GET['e'])){
	
		$e = $_GET['e'];
		$p = $_GET['p'];
	
	
		$delete = new Delete();
		$delete->ExeDelete('publicacao', 'WHERE id= :id', "id={$e}");
	
	
		if ($delete->getResult()){
				
			$excluir = 'Publicação rejeitada com sucesso!';
			$excluirTipo = RI_MSG_SUCCESS;
			
			//excluindo o pdf
			unlink("uploads/{$p}");
			
			$read->ExeRead('publicacao', 'WHERE aprovado = :aprovado', 'aprovado=N');
				
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
			var x = confirm("Deseja realmente rejeitar esta publicação?");
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
					<li><a href="listapublicacao.php"><span class="glyphicon glyphicon-list-alt"></span> Publicações</a></li>
					<li><a href="cadastropublicacao.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Publicações</a></li>
					<li class="active"><a href="sub.php"><span class="glyphicon glyphicon-upload"></span> Submissões <span class="sr-only">(current)</span></a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li><a href="perfil.php"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
					<li><a href="cadastroperfil.php"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Usuário</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1><span class="glyphicon glyphicon-cloud-upload"></span> Gerenciar Submissões de Publicações</h1>
	
		<div class="col-lg-12 col-xs-12" style="margin-bottom: 40px; ">
			<?php 
			if ($excluirTipo != ''){
				
				MSG($excluir, $excluirTipo);
			
			} else if ($aprovado){
				MSG('Publicação aprovada com sucesso!', RI_MSG_SUCCESS);
			}
			?>
		</div>
	
		<?php
			if ($read->getResult()){
		echo'
		<table class="table table-striped" border="0" id="tb1">
			<thead>
				<th style="text-align:center;">Ano</th>
				<th style="text-align:center;">Título</th>
				<th style="text-align:center;">Autor (es)</th>
				<th style="text-align:center;">Aprovar</th>
				<th style="text-align:center;">Rejeitar</th>
			</thead>
			<tbody>';
					
					foreach ($read->getResult() as $pub){
						echo '<tr>';
							echo '<td style="text-align:center;">'.$pub['ano'].'</td>';
							echo '<td style="text-align:justify;">'.$pub['titulo'].'</td>';
							echo '<td style="text-align:center;">'.$pub['autores'].'</td>';
							echo '<td style="text-align:center;"><a href="sub.php?id='.$pub['id'].'" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span></a></td>';
							echo '<td style="text-align:center;"><a onclick="return confirmar();" href="sub.php?e='.$pub['id'].'&p='.$pub['arquivo'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
								 </td>';

						echo '</tr>';
					
					}
		echo'			
			</tbody>
		</table>';
	
			}
			else {
				MSG('Nenhuma submissão encontrada!', RI_MSG_WARNING);
			}
		?>
		
		</div>
    </div>
  </body>
</html>