<?php
	function displayPanier(){
		$result = sendRequest("SELECT * FROM Panier, Item, Media WHERE Client = '" . $_SESSION['ID_people'] . "' AND Panier.Objet = Item.id AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			echo '<div class="row">';
			echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
			echo '<div class="col-sm-11"><span>' . $data['Nom'] . '</span>';
			echo '<span> Prix : ' . $data['Prix'] . '€ </span>';
			echo '<span> Quantité : <input style="width:30px;" type="number" value="' . $data['Quantite'] . '"></span>';
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
			$result = sendRequest("SELECT * FROM Item, Media WHERE Item.media = Media.id");
			while($data = mysqli_fetch_assoc($result)){
				echo "<a href='#'><div class='article row'>";
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

	function displayRecherche($Item){
		$result = sendRequest("SELECT * FROM Item, Media WHERE Item.Nom LIKE '%" . $Item . "%' AND Item.media = Media.id");
		while($data = mysqli_fetch_assoc($result)){
			echo "<a href='#'><div class='article row'>";
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

		$result = sendRequest("SELECT * FROM " . $table . ", Item, Media WHERE " . $table . ".item = Item.Id AND Item.media = Media.id ORDER BY Item.Nb_Ventes DESC");
		$nbDisplayed = 0;
		while($data = mysqli_fetch_assoc($result)){
			if($nbDisplayed == 4){
				break;
			}
			if($nbDisplayed % 2 == 0){
				echo '<div class="row">';
			}
			echo '<div class="card col-sm-6"><a href="objet.php?ID=' . $data['item'] . '&amp;categorie=' . $table . '">';
			echo '<img class="card-img-top" src="' . $data['Path1'] . '" alt="Card image">';
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
?>