<?php 	
	require 'app/Config.inc.php';

	$readPublicacao = new Read();
	$readPublicacao->FullRead("SELECT COUNT(*) FROM publicacao WHERE aprovado = 'S'");
	
?>
<!DOCTYPE html>
<html class="ls-theme-green ls-html-nobg">
  <head>
    <title>Repositório CONNEPI</title>

    <?php require_once('assets.php');?>
    <script type="text/javascript" src="assets/js/chartist.min.js"></script>
	<script src="assets/js/high.js"></script>
	<script src="assets/js/highex.js"></script>
	<script src="assets/js/graphs.js"></script>
    <link href="assets/css/chartist.min.css" rel="stylesheet" type="text/css">
    
  </head>
  <body>

    <?php require_once('header.php');?>

    <?php require_once('aside.php');?>

    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-dashboard">Dashboard</h1>

<!-- ----------------- -->
<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Relatório total</h2>
    <!-- <a href="/locawebstyle/documentacao/exemplos/painel2/stats" class="ls-btn ls-btn-sm">Ver relatórios</a> -->
  </header>

  <div id="sending-stats" class="row ls-clearfix">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="ls-box">
        <div class="ls-box-head">
          <h2 class="ls-title-3">Publicações</h2>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong class="ls-color-theme"><?php echo $readPublicacao->getResult()[0]['COUNT(*)']; ?></strong>
          </span>
        </div>
      </div>
    </div>

  </div>
  <hr class="ls-no-border">
  <div id="panel-charts-2" class="ls-clear-both"></div>
</div>

<!-- ------------- -->

<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <p class="ls-float-right ls-float-none-xs ls-small-info"><strong></strong></p>
    <h2 class="ls-title-3">Gráficos</h2>
  </header>
  <div id="ano" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 
 </div>
 
 <div class="ls-box ls-board-box">
  <div id="ano3" style="min-width:310px; height: 400px; margin: 0 auto"></div>
 </div>
 
 <div class="ls-box ls-board-box">
  <div id="ano4" style="min-width:310px; height: 800px; margin:0 auto"></div>
 </div>
 
<!-- ---------------- -->
    </div>
      <?php require_once('footer.php');?>
    </main>

    
    <?php require_once('assets-footer.php');?>

  </body>
</html>