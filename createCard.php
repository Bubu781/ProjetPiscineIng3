<?php
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