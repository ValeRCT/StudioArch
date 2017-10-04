 <!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Blog</title>

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
		<li><a href="progetti.php">Progetti</a></li>
		<li class="current-page"><a href="blog.php">Blog</a></li>
	    <li><a href="contatti.php">Contatti</a></li>  
		<li><a href="preventivo.php">Preventivo online</a></li> 
     </ul>
	</div>		
	</nav>	

	<div class="main-page">
    
   <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3"></div>
            </div>
        </div>   
   </div>
   
    <div class="main-banner">
        <div class="container">
            <img src="img/blog/copertina.jpg" class="img-responsive" id="img">
        </div>
    </div>
    
    <div class="post-widgets">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="page">
					
					<?php
					
					// includiamo il codice per la creazione delle anteprime
                    @require "anteprima.php";
				
				$query_articoli="SELECT * FROM articoli ORDER BY data DESC";
				
				if (!($risultato = $connessione->query($query_articoli)))
					die("Query su articoli fallita!");
				$i=1;
				while ($riga = $risultato->fetch_array()) {
					$id = $riga["id"];
					$titolo = $riga["titolo"];
					$articolo = $riga["articolo"];
					$data = $riga["data"];
					
				//creiamo una variabile con il link all'intero articolo
                $link = "<br><a href='articolo.php?id=$id'>Leggi tutto</a>";

				echo "<h3>".$titolo."</h3>";
   
                // stampiamo l'anteprima che mostra le prime 30 parole di ogni articolo
                echo @anteprima($articolo, 30, $link); 
                echo "<br><br>";
				
				// formattiamo la data nel formato europeo
                $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $data);
				
                echo  "| Articolo postato il <b>" . $data . "</b>";
               
                } 

				?>
									
                    </div>          
                </div>
                <div class="col-sm-3">
                   <div class="widgets">
                        <h3>Trova articolo</h3>
						<form class="navbar-form" role="search" action="ricercaBlog.php" method="post">
							<div class="input-group">
								<input type="text" class="form-control" name="ricerca" placeholder="...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">cerca</button>
                                    </span>
							</div>
						</form>
                    </div>
                    
                    <div class="widgets">
                        <h3>Categorie</h3>
                        <ul>
                            <li><a href="arredamento.php?categoria=arredamento">Arredamento</a></li>
                            <li><a href="ecosostenibile.php?categoria=ecosostenibile">Architettura Ecosostenibile</a></li>
                            <li><a href="energetica.php?categoria=energetica">Certificazione Energetica</a></li>
						</ul>
					</div>
                    
                    <div class="widgets">
                        <h3>Articoli recenti</h3>
        <?php

		$query_articoli ="SELECT titolo FROM articoli ORDER BY data DESC limit 2";

        if (!($risultato = $connessione->query($query_articoli)))
          die("Ricerca fallita!");
	  
        $i=1;
        while ($riga = $risultato->fetch_array() && $i < 4) {
          $titolo = $riga["titolo"];
          $articoli=$riga["articoli"];
          $data=$riga["data"];
          $id=$riga["id"];

			 echo "<div class='widgets'>";
			 echo "<ul>";
			 echo "<li>";
			 echo "<h4><a href='articolo.php?id=$id'>.$titolo.</a></h4>";
			 echo "</li>";
			 echo "</ul>";
			 echo "</div>";
			 
		 $i++;
        }

        ?>
                    </div>    
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
	
  </body>
</html>