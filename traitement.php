<?php
	function displayPanier(){
		$result = sendRequest("SELECT * FROM Panier, Media, Item WHERE Client = '" . $_SESSION['ID_people'] . "' AND Panier.Objet = Item.id AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			echo '<div class="row panier">';
			echo '<div class="col-sm-1"><br><img width="100" height="100" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
			echo '<div class="col-sm-10" ><br><span class="pobjet">' . $data['Nom'] . '</span>';
			echo '<span> Prix : ' . $data['Prix'] . '€ </span>';
			echo '<span> Quantité : <input style="width:50px;" type="number" name="quantite[]" value="' . $data['Quantite'] . '"></span>';
			echo '</div>';
			echo '<input name="idPeople" type="hidden" value="'. $_SESSION['ID_people'] .'"><input name="id[]" type="hidden" value="'. $data['Id'] .'">';
			echo '</div>';
		}
	}
	function displayPanierDeProduits(){
		$result = sendRequest("SELECT * FROM Panier, Media, Item WHERE Client = '" . $_SESSION['ID_people'] . "' AND Panier.Objet = Item.id AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			echo '<div class="row">';
			echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
			echo '<div class="col-sm-11"><span>' . $data['Nom'] . '</span>';
			echo '<span> Prix : ' . $data['Prix'] . '€ </span>';
			echo isset($data['Taille'])?'<span> Taille : ' . $data['Taille'] . ' </span>':"";
			echo isset($data['Couleur'])?'<span> Couleur : ' . $data['Couleur'] . ' </span>':"";
			echo '<span> Quantité : <input style="width:70px;" type="number" name="quantite[]" value="' . $data['Quantite'] . '"></span>';
			echo '<input type="hidden" name="id[]" value="' . $data['Id'] . '">';
			echo '<input type="hidden" name="Taille[]" value="' . $data['Taille'] . '">';
			echo '<input type="hidden" name="Couleur[]" value="' . $data['Couleur'] . '">';
			echo '</div></div>';
		}
	}

	function displayProduit(){
		$result = sendRequest("SELECT * FROM Produits, Item, Media WHERE Vendeur = '" . $_SESSION['ID_people'] . "' AND Produits.Objet = Item.id AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			echo '<div class="row">';
			echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
			echo '<div class="col-sm-11"><span>' . $data['Nom'] . '</span>';
			echo '<span> 	 : ' . $data['Prix'] . '€ </span>';
			echo '<span> Quantité : ' . $data['Quantite'] ;
			echo '</div></div>';
		}
	}

	function displayList($categorie){
		if($categorie < 4){
			if($categorie == 0){
				$nomCategorie = "Vetements";
			}else if($categorie == 1){
				$nomCategorie = "Musiques";
			}else if($categorie == 2){
				$nomCategorie = "Livres";
			}else{
				$nomCategorie = "Sport_Et_Loisir";
			}

			if (!isset($_SESSION['type_utilisateur']) || $_SESSION['type_utilisateur'] == 2 )
			{
				$result = sendRequest("SELECT * FROM " . $nomCategorie . ", Item, Media, produits WHERE " . $nomCategorie . ".item = Item.Id AND Item.media = Media.id AND produits.Objet = item.Id");
			}
			else {
				$result = sendRequest("SELECT * FROM " . $nomCategorie . ", Item, Media WHERE " . $nomCategorie . ".item = Item.Id AND Item.media = Media.id");
			}
			while($data = mysqli_fetch_assoc($result)){
				echo "<a href='objet.php?ID=" . $data['item'] ."&amp;categorie=" . $categorie . "'><div class='article row'>";
					echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="Image"></div>';
					echo '<div class="col-sm-9">';
						echo '<h2>' . $data['Nom'] . ($categorie==1||$categorie==2?' - '. $data['Auteur'].'</h2>':'</h2>');
						echo '<p>' . $data['Description'] . '</p>';
					echo '</div>';
					echo '<div class="col-sm-1"><p><strong>Prix :</strong> ' . $data['Prix'] . '€</p></div>';
				echo "</div></a>";
			}
		}else{
			if (!isset($_SESSION['type_utilisateur']) || $_SESSION['type_utilisateur'] == 2 )
			{
				$result = sendRequest("SELECT * FROM   Media,Item, produits WHERE Item.media = Media.id AND produits.Objet = item.Id");
			}
			else {
				$result = sendRequest("SELECT * FROM Media, Item  WHERE Item.media = Media.id");
			}
			while($data = mysqli_fetch_assoc($result)){
				$test = sendRequest("SELECT Id FROM Item, Vetements WHERE Item.Id = ".$data['Id']." AND vetements.item = item.Id ");
				if (mysqli_fetch_assoc($test) != NULL){$categorie = 0;}
				$test = sendRequest("SELECT Id FROM Item, Musiques WHERE Item.Id = ".$data['Id']." AND Musiques.item = item.Id ");
				if (mysqli_fetch_assoc($test) != NULL){$categorie = 1;}
				$test = sendRequest("SELECT Id FROM Item, Livres WHERE Item.Id = ".$data['Id']." AND Livres.item = item.Id ");
				if (mysqli_fetch_assoc($test) != NULL){$categorie = 2;}
				$test = sendRequest("SELECT Id FROM Item, Sport_Et_Loisir WHERE Item.Id = ".$data['Id']." AND Sport_Et_Loisir.item = item.Id ");
				if (mysqli_fetch_assoc($test) != NULL){$categorie = 3;}
					echo "<a href='objet.php?ID=" . $data['Id'] ."&amp;categorie=" . $categorie . "'><div class='article row'>";
						echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="Image"></div>';
						echo '<div class="col-sm-9">';
							echo '<h2>' . $data['Nom'] .'</h2>';
							echo '<p>' . $data['Description'] . '</p>';
						echo '</div>';
						echo '<div class="col-sm-1"><p><strong>Prix :</strong> ' . $data['Prix'] . '€</p></div>';
					echo "</div></a>";
				}
		}
	}

	function displayGestionItems(){
		$result = sendRequest("SELECT * FROM Media,Item WHERE Item.media = Media.id");
		$categorie;
		while($data = mysqli_fetch_assoc($result)){
			$test = sendRequest("SELECT Id FROM Item, Vetements WHERE Item.Id = ".$data['Id']." AND vetements.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 0;}
			$test = sendRequest("SELECT Id FROM Item, Musiques WHERE Item.Id = ".$data['Id']." AND Musiques.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 1;}
			$test = sendRequest("SELECT Id FROM Item, Livres WHERE Item.Id = ".$data['Id']." AND Livres.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 2;}
			$test = sendRequest("SELECT Id FROM Item, Sport_Et_Loisir WHERE Item.Id = ".$data['Id']." AND Sport_Et_Loisir.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 3;}
				echo '<form action="../back/deleteItem.php" method="post">';
				echo '<input type="hidden" name="id" value = "'. $data['Id'] .'">';
				echo '<input type="hidden" name="categorie" value = "'. $categorie .'">';
				echo "<div class='article row'>";
					echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="Image"></div>';
					echo '<div class="col-sm-9">';
						echo '<h2>' . $data['Nom'] .'</h2>';
						echo '<p>' . $data['Description'] . '</p>';
					echo '</div>';
				echo '<div class="col-sm-1"><input class="bouton btn btn-sm" type="submit" value="Supprimer"></div>';
				echo "</div></form>";
		}
	}

	function displayVendeurs(){
		$result = sendRequest("SELECT * FROM Media,People, Vendeur WHERE Vendeur.people = People.Id AND Media.Id = People.media ");
		while($data = mysqli_fetch_assoc($result)){
				echo '<form action="../back/deleteVendeur.php" method="post">';
				echo '<input type="hidden" name="id" value = "'. $data['Id'] .'">';
				echo "<div class='article row'>";
					echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="Image"></div>';
					echo '<div class="col-sm-9">';
						echo '<h2>' . $data['Pseudo'] .'</h2>';
						echo '<p>' . $data['Nom'] . ', ' .$data['Prenom'] . '</p>';
					echo '</div>';
				echo '<div class="col-sm-1"><input class="bouton btn btn-sm" type="submit" value="Supprimer"></div>';
				echo "</div></form>";
		}
	}

	function displayRecherche($Item){
		$result = sendRequest("SELECT * FROM Media, Item WHERE Item.Nom LIKE '%" . $Item . "%' AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			$test = sendRequest("SELECT Id FROM Item, Vetements WHERE Item.Id = ".$data['Id']." AND vetements.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 0;}
			$test = sendRequest("SELECT Id FROM Item, Musiques WHERE Item.Id = ".$data['Id']." AND Musiques.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 1;}
			$test = sendRequest("SELECT Id FROM Item, Livres WHERE Item.Id = ".$data['Id']." AND Livres.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 2;}
			$test = sendRequest("SELECT Id FROM Item, Sport_Et_Loisir WHERE Item.Id = ".$data['Id']." AND Sport_Et_Loisir.item = item.Id ");
			if (mysqli_fetch_assoc($test) != NULL){$categorie = 3;}
			echo "<a href='objet.php?ID=" . $data['Id'] ."&amp;categorie=" . $categorie . "'><div class='article row'>";
				echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="Image"></div>';
				echo '<div class="col-sm-9">';
					echo '<h2>' . $data['Nom'] .'</h2>';
					echo '<p>' . $data['Description'] . '</p>';
				echo '</div>';
				echo '<div class="col-sm-1"><p><strong>Prix :</strong> ' . $data['Prix'] . '€</p></div>';
			echo "</div></a>";
		}
	}

	function displayCards($table){
		if (!isset($_SESSION['type_utilisateur']) || $_SESSION['type_utilisateur'] == 2 )
			{
				$result = sendRequest("SELECT * FROM " . $table . ", Item, Media, produits WHERE " . $table . ".item = Item.Id AND Item.media = Media.id AND produits.Objet = item.Id ORDER BY Item.Nb_Ventes DESC");
			}
			else {
				$result = sendRequest("SELECT * FROM " . $table . ", Item, Media WHERE " . $table . ".item = Item.Id AND Item.media = Media.id ORDER BY Item.Nb_Ventes DESC");
			}
		$nbDisplayed = 0;
		while($data = mysqli_fetch_assoc($result)){
			if($nbDisplayed == 4){
				break;
			}
			if($nbDisplayed % 2 == 0){
				echo '<div class="row">';
			}

			if($table == 'Vetements'){
				$table = 0;
			}
			else if($table == 'musiques'){
				$table = 1;
			}
			else if($table == 'livres'){
				$table = 2;
			}
			else if($table == 'sport_et_loisir'){
				$table = 3;
			}	

			echo '<div class="card col-sm-6"><a href="objet.php?ID=' . $data['item'] . '&amp;categorie=' . $table . '">';
			echo '<img class="card-img-top" src="' . $data['Path1'] . '" alt="Card image" width="300" height="300">';
			echo '<div class="card-img-overlay">';
			echo '<h4 class="card-title">' . $data['Nom'] . '</h4>';
			echo '</div></a></div>';
			if($nbDisplayed % 2 == 1){
				echo '</div>';
			}
			$nbDisplayed++;
		}
		if($nbDisplayed < 4 && $nbDisplayed % 2 == 1){
			echo '</div>';
		}
	}

function displayCommande()
{
	$result = sendRequest('SELECT * FROM Media, Item, Commandes WHERE Commandes.Client='.$_SESSION['ID_people'].' AND Commandes.Objet=Item.Id AND Item.media=Media.id');

	while($data = mysqli_fetch_assoc($result)){
			echo '<div class="row panier">';
			echo '<div class="col-sm-1"><br><img width="100" height="100" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
			echo '<div class="col-sm-11" ><br><span class="pobjet">' . $data['Nom'] . '</span>';
			echo '<span> Prix : ' . $data['Prix'] . '€ </span>';
			echo '<span> Quantité : <span>' . $data['Quantite'] . '</span></span>';
			echo '</div>';
			echo '<span class="col-sm-4" class="titre"> Votre commande arrivera le </span>' .$data['Date_Livraison'];
			echo '</div>';
		}
}
?>