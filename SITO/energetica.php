<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Energetica</title>

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
		<li><a href="blog.php">Blog</a></li>
		<li><a href="contatti.php">Contatti</a></li>  
		<li><a href="preventivo.php">Preventivo online</a></li> 
    </ul>
  			
	</div>		
	
</nav>	



	<div class="main-page">
    
   <!-- top-nav -->
   <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3"></div>
            </div>
        </div>   
   </div>
   
   <!-- main-banner -->
    <div class="main-banner">
        <div class="container">
            <img src="img/blog/pannelli.jpg" class="img-responsive" id="img">
        </div>
    </div>
    
    <!-- post-widgets -->
    <div class="post-widgets">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    
                    <div class="page">
					
					<?php
				
				$query_articoli="SELECT * FROM articoli WHERE categoria = 'certificazione energetica'";
				
				if (!($risultato = $connessione->query($query_articoli)))
					die("Query su articoli fallita!");
				$i=1;
				while ($riga = $risultato->fetch_array()) {
					$id = $riga["id"];
					$titolo = $riga["titolo"];
					$articolo = $riga["articolo"];
					$data = $riga["data"];
					
					if ($i==1) {
						echo "<div class='row'>";
					}
					
					echo "<div class='col-sm-9'>";
					echo "<h3>$titolo</h3>";
					echo "<div class='details'>";
					echo "<h6>$data</h6>";
					echo "</div>";
					echo "<div class='content'>";
					echo "<p>$articolo</p>";
					echo "</div>";
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
									
                        <h3></h3>
                        <div class="details">
                            <ul>
                                <li>Bartolo</li>
                                <li>Ingegnere</li>
                            </ul>
                        </div>
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
                            <li><a href="arredamento.php">Arredamento</a></li>
                            <li><a href="ecosostenibile.php">Architettura Ecosostenibile</a></li>
                            <li><a href="energetica.php">Certificazione Energetica</a></li>
						</ul>
					</div>
                    
                    <div class="widgets">
                        <h3>Articoli recenti</h3>
                        <ul>
                            <li><h4><a href="#"></a></h4></li>
                            <li><h4><a href="#"></a></h4></li>
                            <li><h4><a href="#"></a></h4></li>
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div><!-- main-page -->
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