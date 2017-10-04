<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  
  <?php
  include "connessione.php";
  ?>		

  <div class="container">
  
	<a href="index.php"><img src="img/logo.png" class="img-responsive" alt="logo studio" id="logo"></a>
		<h1>ArchiPlace </h1>
		<h5 class="lingua">it	en</h5>

     <nav class="navbar navbar-default">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
   

	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="current-page"><a href="index.php">Home</a></li>
			<li><a href="chisiamo.php">Chi siamo</a></li>
			<li><a href="servizi.php">Servizi</a></li>
			<li><a href="progetti.php">Progetti</a></li>
			<li><a href="blog.php">Blog</a></li>
		    <li><a href="contatti.php">Contatti</a></li>  
			<li><a href="preventivo.php">Preventivo online</a></li> 
		</ul>
  			<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="...">
					<span class="input-group-btn"><button type="submit" class="btn btn-default">Cerca</button></span>
				</div>
			</form>
	</div>		
	
    </nav>	

<div class="row">
  	<h1 id="studio">Studio di Architettura e Ingegneria</h1>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- ordine -->
  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- slides -->
  <div class="carousel-inner">
		<div class="item active">
			<img src="img/0.jpg" alt="piscina">
        </div>
		<div class="item">
			<img src="img/1.jpg" alt="soggiorno">
		</div>
	    <div class="item">
			<img src="img/2.jpg" alt="vetrata">
        </div>
  </div>

  <!-- frecce -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	<span class="sr-only">Next</span>
  </a>
  
	</div>
		</div>

		<div class="row">
          <div class="col-sm-12 text-center">
            <h1 class="text-center text-primary title visible-md visible-lg"><a href="progetti.php">Ultimi progetti</a></h1>
            <div class="col-sm-3 text-center">
            </div>
      
    	

		<?php
		
		$query_progetti ="SELECT * FROM progetti ORDER BY data DESC limit 2";

        if (!($risultato = $connessione->query($query_progetti)))
          die("Query sui commenti fallita!");

        $i=0;
        while ($riga = $risultato->fetch_array()) {
          $nome = $riga["nome"];
          $immagine=$riga["immagine"];
          $data=$riga["data"];
          $id_prodotto=$riga["id"];

         echo "<div class='col-sm-3 text-center visible-md visible-lg'>";
		 echo "<a href='progetti.php'><img class='img-thumbnail' src='img/progetti/$immagine'></a>";
		 echo "</div>";
        }

        ?>

	    </div>
        
	
	<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				<h1 class="text-primary title"><a href="servizi.php">I Nostri Servizi</a></h1>
				<h4>Permessi di costruire, SCIA, DIA, Studi di fattibilità, Pratiche Catastali, Nulla Osta per immobili vincolati.</h4>
			    </div>
	
					<div class="col-sm-4">
						<div class="jumbotron text-left" id="blocco">
						<h3>Interior Design</h3>
						<p>Gestiamo ogni aspetto del progetto, curando nel dettaglio gli interni: luce, forme e materiali.</p>
						<a href="servizi.php#interior">DETTAGLI</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="jumbotron text-center" id="blocco">
						<h3>Certificazione Energetica</h3>
						<p>Realizzazione e certificazione di edifici ad alta efficienza energetica.</p>
						<a href="servizi.php#certificazione">DETTAGLI</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="jumbotron text-right" id="blocco">
						<h3>Rendering 3D</h3>
						<p>Render fotorealistici: dalla produzione alla creazione di librerie tridimensionali per il web.</p>
						<a href="servizi.php#rendering">DETTAGLI</a>
						</div>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="jumbotron text-center" id="jumbotron">
				  <h1>less is more</h1>
				  <p>L'arte di eliminare il superfluo...</p> 
				</div>
			</div>
		
			<div class="row visible-md visible-lg">
			<div class="col-sm-12">
				<h1 class="text-center text-primary title" id="come">Come Funziona</h1>
				    <div class="line"></div>
				<div class="col-sm-12 col-sm-offset-2 text-center">
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-list-alt"></span>
						<h6>Scegli il servizio</h6>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-upload"></span>
						<h6>Carica gli allegati</h6>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-euro"></span>
						<h6>Richiedi il preventivo</h6>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-ok"></span>
						<h6>Conferma il servizio</h6>
					</div>
			</div>
			</div>
	</div>


	
	<footer>
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
</div>
	
	<script src="js/jquery-3.2.1.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>