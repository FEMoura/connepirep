<?php 
session_start();
require 'app/Config.inc.php';

if (isset($_GET['category_id'])){
	
	$category_id = $_GET['category_id'];
	$read = new Read();
	
	$read->FullRead("SELECT * FROM publicacao WHERE category_id = $category_id");	
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">
    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
	
	<title>Repositório CONNEPI</title>
	<link rel="icon" href="assets/images/if.png"></link>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
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
	<h1 class="detalhes">Detalhes da Coleção:</h1>
		<div class="container panel panel-default download">
			<?php 
				$total = $read->getRowCount();
				$area = $read->getResult();
				echo '<p><h2>CONNEPI '.$area[0]['ano'].' - '.$area[0]['area'].' ['.$total.']</p></h2>';
			?>
		</div>
	<div class="panel panel-success">
		<div class="panel-heading"><h4 style="text-align:center;">Registros da coleção</h4></div>
			<div class="panel-body">
				
		<?php
			if ($read->getResult()){
		echo '
				<div class="col-lg-12 col-md-12">
					<table class="ls-table a ls-bg-header ls-table-striped ls-table-bordered display" border="0" id="tb1">
						<thead>
							<th>Ano</th>
							<th style="text-align:center;">Título</th>
							<th style="text-align:center;">Instituição</th>
							<th style="text-align:center;">Autor(es)</th>
							<th style="text-align:center;">Palavras-Chave</th>
							<th>Detalhes</th>
						</thead>
						<tbody>';
								
									foreach ($read->getResult() as $r){
										echo '<tr>';
											echo '<td>'.$r['ano'].'</td>';
											echo '<td style="text-align:center;">'.$r['titulo'].'</a></td>';
											echo '<td style="text-align:center;">'.$r['ies'].'</td>';
											echo '<td style="text-align:center;">'.$r['autores'].'</td>';
											echo '<td style="text-align:center;">'.$r['keywords'].'</td>';
											echo '<td style="text-align:center;"><a href="view.php?id='.$r['id'].'" class="btn btn-success" title="Visualizar"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>';
										echo '</tr>';
									
									}
					echo '			
						</tbody>
					</table>
				</div>';
			}
		?>
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
	
