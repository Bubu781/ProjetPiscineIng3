<?php
	$result = sendRequest("SELECT * FROM Panier, Item, Media WHERE Client = '" . $_SESSION['ID_people'] . "' AND Panier.Objet = Item.id AND Item.media = Media.id");
	while($data = mysqli_fetch_assoc($result)){
		echo '<div class="row">';
		echo '<div class="col-sm-1"><img class="card-img" src="' . $data['Path1'] . '" alt="' . $data['Nom'] .'"></div>';
		echo '<div class="col-sm-11"><span>' . $data['Nom'] . '</span>';
		echo '<span> Prix : ' . $data['Prix'] . '€ </span>';
		echo '<span> Quantité : <input style="width:30px;" type="number" value="' . $data['Quantite'] . '"></span>';
		echo '</div></div>';
	}
?>