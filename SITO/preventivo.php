<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
            $(document).ready(function (e) {
                $('#upload').on('click', function () {
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: 'upload.php', 
                        dataType: 'text', 
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#msg').html(response); 
                        },
                        error: function (response) {
                            $('#msg').html(response); 
                        }
                    });
                });
            });
</script>	

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
	  <li><a href="chi siamo.php">Chi siamo</a></li>
      <li><a href="servizi.php">Servizi</a></li>
	  <li><a href="progetti.php">Progetti</a></li>
	   <li><a href="blog.php">Blog</a></li>
	    <li><a href="contatti.php">Contatti</a></li>  
		<li class="current-page"><a href="preventivo.php">Preventivo online</a></li> 
        </ul>
  			
		</div>		
	
</nav>	

<div class="row">
		<div class="col-sm-12 text-center">
			<h2>Modulo Richiesta Preventivo</h2>
		</div>
	  </div>
		   <div class="row"> 
				<div class="col-sm-12">


<form class="form-horizontal">
<fieldset>

<div class="form-group">
  <label class="col-sm-4 control-label" for="name">Nome</label>  
  <div class="col-sm-4">
  <input id="nome" name="nome" placeholder="name" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-sm-4 control-label" for="contact">Cellulare</label>  
  <div class="col-sm-4">
  <input id="contatto" name="contatto" placeholder="(xxx) xxx-xxxx" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-sm-4 control-label" for="e-mail">E-mail</label>  
  <div class="col-sm-4">
  <input id="e-mail" name="e-mail" placeholder="e-mail" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-sm-4 control-label" for="city">Città</label>  
  <div class="col-sm-4">
  <input id="città" name="città" placeholder="Città di Residenza" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-sm-4 control-label" for="selectbasic">Seleziona Servizio</label>
  <div class="col-sm-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="Pratiche Edilizie">Pratiche Edilizie</option>
      <option value="Interior Design">Interior Design</option>
      <option value="Certificazione Energetica">Certificazione Energetica</option>
      <option value="Rendering">Rendering</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-sm-4 control-label" for="textarea">Aggiungi Informazioni</label>
  <div class="col-sm-4">                     
    <textarea class="form-control" id="messaggio" name="messaggio"></textarea>
  </div>
</div>

<!-- Upload -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="fileToUpload">Scegli un file da inviarci</label>
      <input type="file" name="file" id="file"/>
	  <button id="upload">Carica</button>
    </div>	

<!-- Button -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="submit">Conferma</label>
  <div class="col-sm-4">
    <button id="submit" name="submit" class="btn btn-info btn-custom">Invia richiesta</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
	

		<div class="row">
			<div class="jumbotron text-center" id="jumbotron">
			  <h1></h1>
			  <p>Non si può pensare un’architettura senza pensare alla gente.<br>
			  Richard Rogers</p> 
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





