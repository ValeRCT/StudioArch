<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Progetti</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>		
	<script src="js/jquery.lazyload.js"></script>
	
		<script>
			$(document).ready( function(){
					$(".img-thumbnail").lazyload({
						 effect : "fadeIn",
						 effect_speed:1000
					});
				});
		</script>
  </head>
  <body>
  
  <?php
  include "connessione.php";
  ?>	
  
  <div class="container">
        <a href="index.php"><img src="img/logo.png" class="img-responsive" alt="logo studio" id="logo"></a>
			<h1>ArchiPlace</h1>
			<h5 class="lingua">it  en</h5>
	
	
	    <nav class="navbar navbar-default">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
   

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="chisiamo.php">Chi siamo</a></li>
					<li><a href="servizi.php">Servizi</a></li>
					<li class="current-page"><a href="progetti.php">Progetti</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contatti.php">Contatti</a></li>  
					<li><a href="preventivo.php">Preventivo online</a></li> 
				</ul>
				
				<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
					<div class="input-group">
						<input name ="ricerca" type="text" class="form-control" placeholder="Progetto...">
						<span class="input-group-btn"><button type="submit" class="btn btn-default">cerca</button></span>
					</div>
				</form>
			</div>			
		</nav>	
		
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-primary title">I Nostri Progetti</h1>
				<ul class="list-inline">
					<li class="nav-item">
						<a class="nav-link" href="residenziale.php">Residenziale /</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="commerciale.php">Commerciale /</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="interiordesign.php">Interior Design</a>
					</li>
				</ul>
			
				<?php
				
				$query_progetti="SELECT * FROM progetti ORDER BY data DESC";
				
				if (!($risultato = $connessione->query($query_progetti)))
					die("Query su progetti fallita!");
				$i=1;
				while ($riga = $risultato->fetch_array()) {
					$id = $riga["id"];
					$immagine = $riga["immagine"];
					$nome = $riga["nome"];
					$data = $riga["data"];
					
					if ($i==1) {
						echo "<div class='row'>";
					}
					
					echo "<div class='col-sm-4'>";
					echo "<img class='img-thumbnail' data-original='img/progetti/$immagine'>";
					echo "<h5>$nome</h5>";
					echo "<h5>$data</h5>";
					echo "</div>";
					
					if ($i==3) {
						echo "</div>";
						$i=1;
					} 	else {
							$i++;
					}

				}
				if ($i!=1) {
					echo "</div>";
				}
				
				?>
			
			</div>					
		</div>
	</div>
	<footer class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="pull-left"> CONTATTI <br><br>
				info@archiplace.com <br>
				via Artisti 33 - Torino - 10124
				</p>
				<p class="pull-right"> 
				Copyright © ArchiPlace 2017 </p>
			</div>
		</div>
	</footer>
	
  </body>
</html>