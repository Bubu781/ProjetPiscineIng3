<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Connexion</title>
</head>
<body>
<!--Header avec la navigation-->
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
		<!-- Nom du site -->
  	<a class="navbar-brand" href="#">Nom</a>
		<div class="container-fluid">
		  <!-- Liens -->
		  <ul class="nav navbar-nav">
		    <!-- Liste des categories -->
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="categories" data-toggle="dropdown">
		        Categories
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="boutique.php?categorie=0">Vetements</a>
		        <a class="dropdown-item" href="boutique.php?categorie=1">Musique</a>
		        <a class="dropdown-item" href="boutique.php?categorie=2">Livres</a>
		        <a class="dropdown-item" href="boutique.php?categorie=3">Sport & Loisirs</a>
		      </div>
		    </li>

		    <li class="nav-item active">
		      <a class="nav-link" href="#">Se connecter</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Mon Panier</a>
		    </li>
		  </ul>
		  <!-- Barre de recherche -->
		  <form class="navbar-form navbar-right form-inline" action="" method="post">
		  	 <div class="form-group">
		  	    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher"/>
		    		<button class="btn btn-primary btn-sm" type="submit">Rechercher</button>
		  		</div>
			</form>
		</div>
	</nav>
	</body>
</html>