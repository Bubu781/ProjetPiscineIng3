<?php
	function displayArticles($categorie){
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
			$result = sendRequest("SELECT * FROM " . $nomCategorie . ", Item, Media WHERE " . $nomCategorie . ".item = Item.Id AND Item.media = Media.id");
			while($data = mysqli_fetch_assoc($result)){
				echo "<a href='#'><div class='article row'>";
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
?>