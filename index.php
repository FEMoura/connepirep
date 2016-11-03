<!DOCTYPE html>
<html lang="pt-br">

<?php 

require 'app/Config.inc.php';
$read = new Read();
$resultado = true;

$form= filter_input_array(INPUT_POST, FILTER_DEFAULT);
if($form && $form['submit']){

	if (isset($form['submit'])){

		if (!$_POST['busca']){

			MSG("Digite um termo para busca", RI_MSG_WARNING);
			
		}
		else if ($_POST['busca']){
			
			$busca = $_POST['busca'];
			$tipo = $_POST['tipo'];
			$read = new Read();
		    $read->FullRead("SELECT * FROM publicacao WHERE {$tipo} LIKE \"%{$busca}%\" AND aprovado = 'S'");
			}
			if (!$read->getResult()){
					$resultado = false;
			}							
		}
	}
?>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/repositorio.css" rel="stylesheet">
    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
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
		<li><a href="submeter.php">Submeter</a></li>
        <li class="li-login"><a href="login.php" class="login" title="Área do Administrador"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
    </ul>
</nav>
 
<!-- Início da barra de busca -->

<div class="container abc">

<?php
	$get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
		if (!empty($get)){
			if ($get == 'restrito'){
				MSG('Acesso negado: Por favor efetue login para acessar o Painel!', RI_MSG_DANGER);
			}
			else if($get == 'logoff') {
				MSG('Sucesso ao deslogar: Sua sessão foi finalizada. Volte sempre!', RI_MSG_SUCCESS);
			}
		}
?>

	<div class="col-md-12 col-lg-12 c">
		<form action="index.php" method="post" enctype="multipart/form-data" style="background-color">
			<div class="form-group col-lg-5 col-md-5">
				<label class="sr-only" for="">Digite um termo para busca</label>
				<input type="search" class="form-control inp" name="busca" id="" placeholder="Digite um termo para pesquisar..." required>
			</div>
		
			<div class="form-group col-lg-4 col-md-4">
				<select class="form-control inp" name="tipo">
					<option value="area">Área</option>
					<option value="titulo" selected>Título</option>
					<option value="autores">Autor</option>
					<option value="ano">Ano</option>
					<option value="keywords">Palavras-Chave</option>
				</select>
			</div>
						
			<div class="form-group col-lg-3 col-md-3">
				<input type="submit" class="btn btn-default inp bt-lg" name="submit" value="Pesquisar">
			</div>
		
		</form>
		
	</div>
				
<?php

	if (!$resultado){
		MSG("Nenhum resultado encontrado!", RI_MSG_DANGER);
			
			}
			else if ($read->getResult()){
			
				echo '
				<hr>
				<div class="col-lg-12 col-md-12 contorno-table">
					<table class="ls-table a ls-bg-header ls-table-striped ls-table-bordered display" cellspacing="0" cellpadding="0" border="0" id="tb1">
						<thead>
							<th>Ano</th>
							<th>Título</th>
							<th>Área</th>
							<th>Autor(es)</th>
							<th>Palavras-Chave</th>
							<th>Detalhes</th>
						</thead>
						<tbody>';
								
									foreach ($read->getResult() as $r){
										echo '<tr>';
											echo '<td>'.$r['ano'].'</td>';
											echo '<td>'.$r['titulo'].'</a></td>';
											echo '<td>'.$r['area'].'</td>';
											echo '<td>'.$r['autores'].'</td>';
											echo '<td>'.$r['keywords'].'</td>';
											echo '<td style="text-align:center;"><a href="view.php?id='.$r['id'].'" class="btn bt-visualizar" title="Visualizar"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>';
										echo '</tr>';
									
									}
					echo '			
						</tbody>
					</table>
				</div>';	
				
			}
			?>
</div>

		<div class="container-fluid">
			<div class="row">
				<div class="cop">
					<p>2015-<?= date('Y');?> Repositório CONNEPI. Desenvolvido por <a href="http://lattes.cnpq.br/6861906589576170" target="__blank" class="lattes" title="Lattes">Lucas Gabriel</a> e <a href="http://lattes.cnpq.br/1206492903523400" target="__blank" class="lattes" title="Lattes">Felipe Eloi</a></p>
				</div>
			</div>
		</div>

<!-- JavaScript no fim para carregar as páginas mais rapidamente-->
	
    	<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
	</body>
</html>
