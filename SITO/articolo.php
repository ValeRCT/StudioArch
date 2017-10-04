<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Articolo</title>

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
  			<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="Cerca">
					<span class="input-group-btn"><button type="submit" class="btn btn-default">Cerca</button></span>
				</div>
			</form>
   </div>		
	
</nav>	
	  
<div class="main-page">
    
   <!-- top-nav -->
   <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-9"></div>

   
   </div>
   
   <!-- main-banner -->
    <div class="main-banner">
        <div class="container">
            <img src="img/blog/bambu.jpg" class="img-responsive">
        </div>
    </div>
	
		<?php
		    $id = $_GET['id'];
		    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
			if($categoria != ''){
				$query_articoli="SELECT `id`, `titolo`, `articolo`, `data`, `categoria` FROM `articoli` where categoria = '$categoria' order by data desc";
			} else {
				$query_articoli="SELECT `id`, `titolo`, `articolo`, `data`, `categoria` FROM `articoli` WHERE id=$id order by data desc";
			}
			
              if (!($risultato = $connessione->query($query_articoli)))
                die("Query su articoli fallita!");

			  while($riga = $risultato->fetch_array(MYSQLI_ASSOC))
			  {
                    $id=$riga["id"];
                    $titolo = $riga["titolo"];
                    $articolo=$riga["articolo"];
                    $data=$riga["data"];
                    $categoria=$riga["categoria"];

					echo "<p>";
                    echo "<h2>$titolo</h2>";
                    echo "<h5>" . date('d/m/Y', strtotime($data)) . "</h5>";
                    echo "<p>$articolo";
                    echo "</p>";
					
					// visualizzianmo tutti i commenti
					$sql_com = "SELECT `id_articolo`, `utente`, `commento` FROM `commenti` WHERE id_articolo = '$id'";
					$query_com = $connessione->query($sql_com);
	
					if($query_com->num_rows > 0)
					{
						echo "Commenti:<br>";
						while($row_commenti = $query_com->fetch_array(MYSQLI_ASSOC))
						{
							$utente = stripslashes($row_commenti['utente']);
							$commento = stripslashes($row_commenti['commento']);
							echo "<p>";
							echo $commento . "<br>";
							echo "Inserito da <b>". $utente . "</b>";
							echo "<hr>"; 
							echo "</p>";
						}
					}
					}
					// link alla pagina dei commenti  
                    //echo "<br><a href=\"aggiungicommento.php?id=\">Invia un commento</a><br><br>";
					?>
					
				<script>
                $(document).ready(function(e) {
                   $("#commento").submit(function(event){
                        // VALIDAZIONE DEL FORM DI COMMENTO
                        event.preventDefault();

                        $("#commento").remove();
                        $("#commento").removeClass("error");

                        var commento=$("#commento").val();
                        if (commento=="") {
                          $("#commento").addClass("error");
                          $("#commento").after("<row_commenti='help-inline'>Il commento non può essere vuoto!</span>");
                        } else {
                          $("#commento").unbind("submit");
                          $("#commento").submit();
                        }
                   });
                });

            </script> 
					
					<div class="row">
						<div class="col-sm-12">
							<form id="commentoform$id" class="form-horizontal" method="POST" action="aggiungicommento.php">
							<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
							<div class="control-group" id="commentogroup">
							  <label class="control-label" for="commento">Commento</label>
							  <div class="controls">
								<textarea class="form-control" id="commento" class="span5" name="commento" rows="5" maxlength="500"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <div class="controls">
								<button type="submit" class="btn btn-primary">Invia un commento</button>
							  </div>
							</div>
						  </form>
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