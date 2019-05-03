$(document).ready(function(){
	if($(document).height() <= $(window).height()){
		$('footer').css('position','absolute');
	}else{
		$('footer').css('position','relative');
	}
})
	

loadFormulaireNewItem = () =>{
	$categorie = $('#categorie').val();


	if($categorie == "Vetements"){
		$('#formulaireDown').html(''+

		'<table>'+

			'<tr class="form-group">'+
				'<td>Matière :</td>'+
				'<td><input type="text" name="matiere" id="matiere" class="form-control" placeholder="Saisisez la matière. ex : lin" required></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>type :</td>'+
				'<td><input type="text" name="type" id="type" class="form-control" placeholder="Saisisez le type. ex : teeshirt" required></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Genre :</td>'+
				'<td>'+
					'<SELECT name="genre" id="genre" required class="form-control">'+
					'<OPTION VALUE="homme" selected="selected" >Homme</OPTION>'+
					'<OPTION VALUE="femme">Femme</OPTION>'+
					'</SELECT>'+
				'</td>'+
			'</tr>'+


		'</table>');
	}

	else if($categorie == "Livres"){
		$('#formulaireDown').html(''+
		'<table>'+
				'<tr class="form-group">'+
					'<td>Auteur :</td>'+
					'<td><input type="text" name="auteur" id="auteur" required class="form-control" placeholder="Saisisez l'+"'"+'auteur"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Genre :</td>'+
					'<td><input type="text" name="genre" id="genre" required class="form-control" placeholder="Saisisez le genre. ex : Policier"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Date de sortie :</td>'+
					'<td><input type="date" name="sortie" id="sortie" required class="form-control" placeholder="Saisisez la date de sortie du livre"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Nombre de pages :</td>'+
					'<td><input type="number" name="nb_Pages" id="nb_Pages" required class="form-control" placeholder="Saisisez le nombre de pages"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
				'	<td>Format :</td>'+
				'	<td>'+
						'<SELECT name="format" id="format" required class="form-control">'+
						'<OPTION VALUE="poche" selected="selected" >Poche</OPTION>'+
						'<OPTION VALUE="grand">Grand format</OPTION>'+
						'<OPTION VALUE="ebook">eBook</OPTION>'+
						'</SELECT>'+
					'</td>'+
				'</table>'

			);
	}

	else if($categorie == "Musiques"){
		$('#formulaireDown').html(''+


				'<tr class="form-group">'+
					'<td>Auteur :</td>'+
					'<td><input type="text" name="auteur" id="auteur" required class="form-control" placeholder="Saisisez l'+"'"+'auteur"></td>'+
				'</tr>'+

			'	<tr class="form-group">'+
					'<td>Style :</td>'+
					'<td><input type="text" name="style"  id="style" required class="form-control" placeholder="Saisisez le style. ex : Pop"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Durée :</td>'+
					'<td><input type="time" name="time" id="time" required class="form-control" placeholder="Saisisez la durée"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Type :</td>'+
					'<td>'+
						'<SELECT name="type" id="type" required class="form-control">'+
						'<OPTION VALUE="dematerialise" selected="selected" >Dématerialisé</OPTION>'+
						'<OPTION VALUE="disque">Disque</OPTION>'+
						'</SELECT>'+
					'</td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Format :</td>'+
				'	<td>'+
						'<SELECT name="format" id="format" required class="form-control">'+
						'<OPTION VALUE="morceau" selected="selected" >Morceau Simple</OPTION>'+
						'<OPTION VALUE="album">Album</OPTION>'+
						'</SELECT>'+
					'</td>'+
				'</tr>'


		);
	}

	else if($categorie == "Sport_Et_Loisir"){
		$('#formulaireDown').html(''+

				'<tr class="form-group">'+
					'<td>Code :</td>'+
					'<td><input type="text" required name="code" id="code" class="form-control" placeholder="Saisisez le poid"></td>'+
				'</tr>'+

			'	<tr class="form-group">'+
					'<td>Poid :</td>'+
					'<td><input type="text" name="poid" id="poid" required class="form-control" placeholder="Saisisez le poid"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Taille :</td>'+
					'<td><input type="text" name="taille"  id="taille" required class="form-control" placeholder="Saisisez la taille"></td>'+
				'</tr>'
			);
	}
}


loadFormulaireNewPeople = () =>{
	$categorie = $('#categorie').val();


	if($categorie == "client"){
		$('#formulaireDown').html(''+

		'<table>'+

			'<tr class="form-group">'+
				'<td>Pays :</td>'+
				'<td><input type="text" id="pays" required name="pays" class="form-control" placeholder="Saisisez le pays"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Code Postal :</td>'+
				'<td><input type="number" id="code_postal" required name="code_postal" class="form-control" placeholder="Saisisez le code postal"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Ville :</td>'+
				'<td><input type="text" id="ville" name="ville" required class="form-control" placeholder="Saisisez la ville"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Adresse L1 :</td>'+
				'<td><textarea type="text" id="adresse_l1" name="adresse_l1" required class="form-control" placeholder="ligne 1"></textarea> </td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Adresse L2 :</td>'+
				'<td><textarea type="text" id="adresse_l2" name="adresse_l2" required class="form-control" placeholder="ligne 2"></textarea> </td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Type de carte :</td>'+
				'<td>'+
					'<SELECT id="type_carte" required name="type_carte" class="form-control">'+
					'<OPTION VALUE="visa" selected="selected" >Visa </OPTION>'+
					'<OPTION VALUE="master">MasterCard</OPTION>'+
					'</SELECT>'+
				'</td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Numéro de carte :</td>'+
				'<td><input type="text" id="Num_Carte" name="Num_Carte" required class="form-control" placeholder="Saisisez le numero de la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
			'	<td>Nom sur la carte :</td>'+
				'<td><input type="text" id="nom_Carte" name="nom_Carte" required class="form-control" placeholder="Saisisez le nom écris sur la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>date d'+"'"+'expiration de la carte :</td>'+
				'<td><input type="month" id="Date_Expiration_Carte" required name="Date_Expiration_Carte" class="form-control" placeholder="Saisisez la date d'+"'"+'expiration de la carte "></td>'+
		'	</tr>'+

			'<tr class="form-group">'+
				'<td>code de carte :</td>'+
				'<td><input type="text" id="code_carte" name="code_carte" required class="form-control" placeholder="Saisisez le code de la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Porte monnaie :</td>'+
				'<td><input type="text" id="banque" name="banque" required class="form-control" placeholder="Saisisez la quantité d'+"'"+'argent dans la banque "></td>'+
			'</tr>'+


		'</table>'



		);
	}

	else if($categorie == "vendeur"){
		$('#formulaireDown').html(''+

		'<table>'+

			'<tr class="form-group">'+
				'<td>Porte monnaie :</td>'+
				'<td><input type="text" id="banque" name="banque" required class="form-control" placeholder="Saisisez la quantité d'+"'"+'argent dans la banque "></td>'+
			'</tr>'+

		'</table>'+

			'<tr class="form-group">'+
				'<td>Votre image favorite :</td>'+
				'<td><input type="file" name="photo1" id="photo1" placeholder="votre image "required></td>'+
			'</tr>'


		);
	}

}
$(document).ready(function() {
	loadCouleurDispo();
});
loadCouleurDispo = () =>{
	$taille = $('#taille').val();


/*
					'<?php'+
						'$result = sendRequest("SELECT produits.Couleur FROM produits, item WHERE item.Id = produits.Objet AND produits.Taille = &quot;". $taille ."&quot; AND item.id = " . $_GET[&quot;ID&quot;] );'+
						'while($data = mysqli_fetch_assoc($result)){'+
							'$couldispo = isset($data["Couleur"])?$data["Couleur"]:"";'+
							'echo &quot;<OPTION VALUE="&quot;.$couldispo.&quot;" >&quot;.$couldispo.&quot;</OPTION>&quot;;'+
						'}	'+
					'?>'+
					*/
		var url = '../back/getColors.php?ID='+ $('#ID').val() +'&taille='+$taille;
    $.post(url, function(data){
    	$('#Color').html(''+
						'<tr>'+
						'<td class="titre">Couleur :</td>'+
						'<td>'+
						'<SELECT id="couleur" name="Couleur" class="form-control">'+
							data+
						'</SELECT>'+
					'</td>'+
				'</tr>'

		);
    });
		
		
	
}

validatePwd = () =>{
$mdp1 = $('#mdp1').val();
$mdp2 = $('#mdp2').val();
console.log($mdp1);
console.log($mdp2);
if ($mdp1 != $mdp2){
	alert("Le Mot de passe est invalide\nles 2 mots de passe saisis ne correspondent pas");	
	///TODO
//$('#mdp1').remove();

	//$('#tel').clone().append($mdp1);

}

	//alert("Le Mot de passe est invalide\nles 2 mots de passe saisis ne correspondent pas");
}



