<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  $connessione= new mysqli ("localhost","root","matec","architettura");
  ?>	
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<h1>STUDIO DI ARCHITETTURA</h1>
			</div>
			<div class="col-xs-4">
				<h6>it	en</h6>
			</div>
		</div>
		
  
     <nav class="navbar navbar-default">
		<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Logo</a>
  </div>
 
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="progetti.php">progetti</a></li>
      <li><a href="progetti.php">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Item 1</a></li>
          <li><a href="#">Item 2</a></li>
          <li><a href="#">Item 3</a></li>
          <li><a href="#">Item 4</a></li>
          <li><a href="#">Item 5</a></li>
        </ul>
      </li>
    </ul>
  			<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="Cerca">
					<span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				</div>
			</form>
	  </div>		
	</div>
</nav>

	<div class="row">
		<div class="col-xs-8">
				<h1>Ricerca</h1>
		<?php
				
				$query_ricerca="SELECT * FROM progetti WHERE nome like '%".$_REQUEST["ricerca"]."%'";
				
				if (!($risultato = $connessione->query($query_ricerca)))
					die("Query su database fallita!");
				$i=1;
				$n=0;
				
				while ($riga = $risultato->fetch_array()) {
					$id = $riga["id"];
					$immagine = $riga["immagine"];
					$nome = $riga["nome"];
					
					if ($i==1) {
						echo "<div class='row'>";
					}
					
					echo "<div class='col-xs-3'>";
					echo "<article><img class='img-thumbnail' src='img/progetti/$immagine'>";
					echo "<h5>$nome</h5>";
					echo "</article>";
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
		<div class="col-xs-4">
				<h2>NEWS</h2>
		</div>
	</div>
	<footer class="panel-footer">
	<div class="row">
		<div class="col-xs-12">
				<h6>CONTATTI</h6>
		</div>
	</div>
	</footer>
				
		
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>
</html>