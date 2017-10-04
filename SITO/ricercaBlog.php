<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RicercaBlog</title>

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
			<h5 class="lingua">it	en</h5>
		
  
     <nav class="navbar navbar-default">
		<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Home</a>
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
	  <li><a href="chisiamo.php">Chi siamo</a></li>
      <li><a href="servizi.php">Servizi</a></li>
	  <li><a href="progetti.php">Progetti</a></li>
	   <li><a href="blog.php">Blog</a></li>
	    <li><a href="contatti.it">Contatti</a></li>  
		<li><a href="preventivo.php">Preventivo online</a></li> 
        </ul>
	  </div>		
	</div>
</nav>

	<div class="row">
		<div class="col-sm-9" id="articolo">
				<h1>Ricerca</h1>
		<?php
				
				$query_ricerca="SELECT * FROM articoli WHERE (titolo like '%".$_REQUEST["ricerca"]."%') or (articolo like '%".$_REQUEST["ricerca"]."%') ORDER BY data DESC";
				
				if (!($risultato = $connessione->query($query_ricerca)))
					die("Query su database fallita!");
				$i=1;
				$n=0;
				
				while ($riga = $risultato->fetch_array()) {
					$id = $riga["id"];
					$titolo = $riga["titolo"];
					$articolo = $riga["articolo"];
					$data = $riga["data"];
					$categoria = $riga["categoria"];
					
					if ($i==1) {
						echo "<div class='row'>";
					}
					
					echo "<div class='col-sm-9'>";
					echo "<div class='page'>";
					echo "<h2>".$titolo."</h2>";
                    echo "<p>$articolo</p>"; 
                    echo  "| Articolo postato il <b>" . $data . "</b>"; 
					echo "</div>";
					echo "</div>";

					
					if ($i==3) {
						echo "</div>";
						$i=1;
					} 	else {
							$i++;
					}
					$n++;
				}
				if ($n>0 && $i!=1) {
					echo "</div>";
				}
				if ($n==0) {
					echo "<p>Ricerca fallita</p>";
				}	
				
				?> 
				

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
		

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>
</html>