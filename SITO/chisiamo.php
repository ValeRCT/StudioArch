<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chi Siamo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
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
		<li class="current-page"><a href="chisiamo.php">Chi siamo</a></li>
		<li><a href="servizi.php">Servizi</a></li>
		<li><a href="progetti.php">Progetti</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="contatti.php">Contatti</a></li>  
		<li><a href="preventivo.php">Preventivo online</a></li> 
    </ul>
	
		</div>		
	</nav>	


	 
		
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Il Nostro Studio</h2>
				</div>
			</div>
		

		   <div class="row"> 
				<div class="col-sm-12">
					<div class="col-sm-6">
				
						<h4>Grazie ad una esperienza maturata in oltre 15 anni di attività lo studio è in grado di fornire un servizio completo e di alto livello qualitativo. Le figure multidisciplinari che collaborano con lo studio sono in grado di affrontare tutte le diverse fasi del progetto fornendo soluzioni professionali ed innovative.</h4><br>
						<img src="img/studio1.jpg" alt="poltrona" class="img-responsive" id="img"><br><br>
					</div>
			
					<div class="col-sm-6">
				
						<img src="img/studio.jpg" alt="poltrona" class="img-responsive" id="img"><br><br>
						<h4>Negli anni, le numerose collaborazioni ed un’innata passione hanno permesso di maturare una notevole esperienza nella progettazione di interni, sopratutto nello studio ergonomico degli spazi, dei materiali, degli abbinamenti cromatici e dello studio illuminotecnico. Grazie alla formazione accademica e alla specializzazione in Product ed Interior Design è in grado di affiancare professionisti e aziende nella progettazione e nella comunicazione coordinata.</h4>
				    </div>
				</div>
			</div>

		
			<div class="row">
				<div class="jumbotron text-center" id="jumbotron">
					<h1></h1>
					<p>Chi progetta sa di aver raggiunto la perfezione non quando non ha più nulla da aggiungere ma quando non gli resta più niente da togliere.<br>
                    Antoine de Saint-Exupery</p> 
				</div>
			</div>
		 
        <div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Team</h2>
					<div class="col-sm-4">
						<div class="card">
						
							<img data-img1="img/bart-bis.jpg" data-img2="img/bartolo.jpg" class="img-rounded" src="img/bartolo.jpg" name="bartolo" alt="Ingeniere Meccanico" width="150" height="150" />
							<h4>Bartolo Mugnolo</h4>
							<h6>Ingegnere Meccanico</h6>
							<a href="#">bartolo@example.com</a>
						</div>
					</div>
				
					<div class="col-sm-4">
						<div class="card">
					
						<img data-img1="img/Vale-bis.jpg" data-img2="img/Vale.jpg" class="img-rounded" src="img/Vale.jpg" alt="Architetto Di Pietra" width="150" height="150"/>
							<h4>Valeria Di Pietra</h4>
							<h6>Architetto</h6>
							<a href="#">vale@example.com</a>
						</div>
					</div>
		
					<div class="col-sm-4">
						<div class="card">

						 <img data-img1="img/fra-biss.jpg" data-img2="img/fra.jpg"class="img-rounded" src="img/fra.jpg" name="fra" alt="Interior Designer" width="150" height="150"/>
						   <h4>Francesca Pirrone</h4>
						   <h6>Interior Designer</h6>
						   <a href="#">fra@example.com</a>
						</div>			
					</div>
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
	
	<script type="text/javascript">		
    $(document).ready(function(){
		function scambia(indice){
			var img = $(".img-rounded").attr("data-img" + indice);
			console.log(img);
            $(".img-rounded").attr("src", img);
		}
		$(".img-rounded").on("mouseover", function(){ 
		    var img = $(this).attr("data-img1");			
            $(this).attr("src", img);
        });
		$(".img-rounded").on("mouseout", function(){
			var img = $(this).attr("data-img2");			
            $(this).attr("src", img);
        });
    });	
    </script>


  </body>
</html>