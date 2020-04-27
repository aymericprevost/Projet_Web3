<?php
session_start();
if (!isset($_SESSION['islog'])) {
	header('Location: Login.html');
	exit;
}
?>
<!doctype html>
<html lang="fr">
	<head>
		<title>Ecogram</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <link rel="stylesheet"href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
		<script type="text/javascript">
      </script>
      <link href="style.css" rel="stylesheet" media="all" type="text/css"> 
      
    </head>
    <body>
      
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
                    <i id="logo" class="fab fa-pagelines fa-3x" aria-hidden="true"></i>
                    <a class="navbar-brand col-2" ><?=$_SESSION['pseudo']?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse col-10" id="navbarNavDropdown">
                      <ul class="navbar-nav col-12">
                        <li class="nav-item active col-3">
                          <a class="nav-link " href="Accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown col-3 ">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Mes Evenements
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#Creer_events">Créer mes évenements</a>
                                        <a class="dropdown-item" href="Listes_events.php">Listes de mes évenements</a>
                                        <a class="dropdown-item" href="Recherche_event.php">Rechercher un évenement</a>
                                      </div>
                                    </li>
                        <li class="nav-item col-3">
                          <a class="nav-link" href="Annonceur.php">Annonceur suivi</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="#Profil">Mon Profil</a>
                          </li>