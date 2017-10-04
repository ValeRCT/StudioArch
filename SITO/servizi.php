 <!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Servizi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/styleblog.css" rel="stylesheet">

    
  </head>
  <body>
  
  <?php
  include "connessione.php";
  ?>		
  
  
  <div class="container">
        <a href="index.php"><img src="img/logo.png" class="img-responsive" alt="logo studio" id="logo"></a>
			<h1>ArchiPlace</h1>
			<h5 class="lingua">it|en</h5>
          
	
	
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
      <li class="current-page"><a href="servizi.php">Servizi</a></li>
	  <li><a href="progetti.php">Progetti</a></li>
	   <li><a href="blog.php">Blog</a></li>
	    <li><a href="contatti.php">Contatti</a></li>  
		<li><a href="preventivo.php">Preventivo online</a></li> 
        </ul>
	</div>		
</nav>	

<div class="row">
		<div class="col-sm-12 text-center">
			<h2>I Nostri Servizi</h2>
		</div>
	  </div>
		   <div class="row"> 
				<div class="col-sm-12">
					<div class="col-sm-6">
					
						<a name="interior"></a><h3>Interior Design</h3>
						<h4>La figura dell’interior designer occupa un ruolo primario nello sviluppo del progetto di interni. Lo studio cromatico, illuminotecnico e dei complementi di arredo saranno studiati e ricercati nei minimi particolari per esaltare le caratteristiche e i punti di forza del soggetto.
						In collaborazione con la direzione marketing, sviluppa e gestisce la sfera artistica e creativa del progetto.</h4><br>
						 <img src="img/render.jpg" alt="render" class="img-responsive" id="img">
						 
						 <a name="pratiche"></a><h3>Pratiche Edilizie<h3>
						 <h4>Offriamo il servizio di variazione catastale che risulta necessaria in caso di: ristrutturazioni con opere murarie, 
						divisione, ampliamento, demolizione, fusione, cambio della destinazione d’uso, ultimazione di fabbricato urbano o altro.</h4><br>
						<img src="img/cert.jpg" alt="render" class="img-responsive" id="img"><br>
					</div>
					
					<div class="col-sm-6">
					    <img src="img/interiordesign.jpg" alt="poltrona" class="img-responsive" id="img"><br>
						<a name="rendering"></a><h3>Rendering</h3>
						<h4>Grazie a software dedicati si producono render di diversi livelli qualitativi, dal bozzetto di prova per analisi di prodotto al render fotorealistico per la comunicazione. Sono generalmente sviluppati per l’architettura,
						product ed interior design ma non poniamo limiti alla realtà virtuale.</h4><br>
						<img src="img/interno.jpg" alt="poltrona" class="img-responsive" id="img">
						
						<a name="certificazione"></a><h3>Certificazione energetica</h3>
						<h4>Offriamo la possibilità di ottenere l'APE: il documento che descrive le caratteristiche energetiche di un edificio, di un abitazione o di un appartamento. E' uno strumento di controllo che sintetizza con una scala da A4 a G (scala di 10 lettere) le prestazioni energetiche degli edifici.
						Al momento dell' acquisto o della locazione di un immobile, oltre ad essere obbligatorio, è utile per informare sul consumo energetico e chiarire sul reale valore degli edifici ad alto 
						risparmio energetico.</h4><br>
				    </div>
				</div>
			</div>
			
					 
		<div class="row">
			<div class="jumbotron text-center" id="jumbotron">
			  <h1></h1>
			  <p>L’opera architettonica non è soltanto l’oggetto, ma anche quello che lo circonda e i vuoti, gli spazi.<br>
			  Oscar Niemeyer</p> 
			</div>
		</div>
		
			<div class="row">
				<div class="col-sm-12 text-center">
					<a href="preventivo.php" class="btn btn-info btn-custom" id="button">Richiedi Preventivo</a>
				</div>
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

	
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>