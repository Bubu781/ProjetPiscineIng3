<!--Header avec la navigation-->
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
	<!-- Nom du site -->
	<a class="navbar-brand" href="index.php">Nom</a>
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
	        <a class="dropdown-item" href="boutique.php?categorie=4">Toutes Catégories</a>
	      </div>
	    </li>

	    <li class="nav-item">
	    	<?php
					if(isset($_SESSION['ID_people'])){
						echo '<a class="nav-link" href="monCompte.php">Mon Profil</a>';
					}else{
						echo '<a class="nav-link" href="connexionPage.php">Se connecter</a>';
					}
	    	?>
	    </li>
	    <?php 
	    	if(isset($_SESSION['ID_people']) && $_SESSION['type_utilisateur'] == 2){
	    ?>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Mon Panier</a>
	    </li>
			<?php
				}else if(isset($_SESSION['ID_people']) && $_SESSION['type_utilisateur'] == 1){
			?>
			<li class="nav-item">
	      <a class="nav-link" href="newItem.php">Ajouter article</a>
	    </li>
	    <?php
	    	}else if(isset($_SESSION['ID_people'])){
	    ?>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Gérer vendeurs</a>
	    </li>
	    <?php
	    	}
	    ?>
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