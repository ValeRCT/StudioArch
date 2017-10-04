<?php

		$connessione = new mysqli("localhost","root","matec","architettura");


        //error_reporting(E_ALL);
        //ini_set( 'display_errors','1');

        session_start();

		$commento = isset($_REQUEST["commento"]) ? $_REQUEST["commento"] : '';
		
		$utente = isset($_SESSION["utente"]) ? intval($_SESSION["utente"]) : 0;

        $commento = isset($_REQUEST["commento"]) ? $_REQUEST["commento"] : '';
        $id_articolo = isset($_REQUEST["id"]) ? intval($_REQUEST["id"]) : 0;

        

        $query= "INSERT INTO commenti (id_articolo,utente,commento) VALUES ($id_articolo,'$utente','$commento')";

        //echo $query;

        $connessione->query($query);

        //echo "OK";

        header('Location: articolo.php?id='.$id_articolo);
        exit;
  ?>
