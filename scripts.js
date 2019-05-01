loadFormulaireNewItem = () =>{
	$categorie = $('#categorie').val();


	if($categorie == "Vetements"){
		$('#formulaireDown').html(''+

		'<table>'+
			'<tr class="form-group">'+
				'<td>Couleur   :</td>'+
				'<td><input type="text" id="Couleur" class="form-control" placeholder="Saisisez la couleur"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Matière :</td>'+
				'<td><input type="text" id="matiere" class="form-control" placeholder="Saisisez la matière. ex : lin"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>type :</td>'+
				'<td><input type="text" id="type" class="form-control" placeholder="Saisisez le type. ex : teeshirt"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Genre :</td>'+
				'<td>'+
					'<SELECT id="genre" class="form-control">'+
					'<OPTION VALUE="homme" selected="selected" >Homme</OPTION>'+
					'<OPTION VALUE="femme">Femme</OPTION>'+
					'</SELECT>'+
				'</td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Taille :</td>'+
				'<td>'+
					'<SELECT id="taille" class="form-control">'+
					'<OPTION VALUE="XS" >XS</OPTION>'+
					'<OPTION VALUE="S" >S</OPTION>'+
					'<OPTION VALUE="M" selected="selected" >M</OPTION>'+
					'<OPTION VALUE="L">L</OPTION>'+
					'<OPTION VALUE="XL">XL</OPTION>'+
					'<OPTION VALUE="XXL">XXL</OPTION>'+
					'</SELECT>'+
				'</td>'+
			'</tr>	'+

		'</table>');
	}

	else if($categorie == "Livres"){
		$('#formulaireDown').html(''+
		'<table>'+
				'<tr class="form-group">'+
					'<td>Auteur :</td>'+
					'<td><input type="text" id="auteur" class="form-control" placeholder="Saisisez l'+"'"+'auteur"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Genre :</td>'+
					'<td><input type="text" id="genre" class="form-control" placeholder="Saisisez le genre. ex : Policier"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Date de sortie :</td>'+
					'<td><input type="date" id="type" class="form-control" placeholder="Saisisez la date de sortie du livre"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Nombre de pages :</td>'+
					'<td><input type="number" id="genre" class="form-control" placeholder="Saisisez le nombre de pages"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
				'	<td>Format :</td>'+
				'	<td>'+
						'<SELECT id="format" class="form-control">'+
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
					'<td><input type="text" id="auteur" class="form-control" placeholder="Saisisez l'+"'"+'auteur"></td>'+
				'</tr>'+

			'	<tr class="form-group">'+
					'<td>Style :</td>'+
					'<td><input type="text" id="style" class="form-control" placeholder="Saisisez le style. ex : Pop"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Durée :</td>'+
					'<td><input type="time" id="time" class="form-control" placeholder="Saisisez la durée"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Type :</td>'+
					'<td>'+
						'<SELECT id="type" class="form-control">'+
						'<OPTION VALUE="dematerialise" selected="selected" >Dématerialisé</OPTION>'+
						'<OPTION VALUE="disque">Disque</OPTION>'+
						'</SELECT>'+
					'</td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Format :</td>'+
				'	<td>'+
						'<SELECT id="type" class="form-control">'+
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
					'<td><input type="text" id="code" class="form-control" placeholder="Saisisez le poid"></td>'+
				'</tr>'+

			'	<tr class="form-group">'+
					'<td>Poid :</td>'+
					'<td><input type="text" id="poid" class="form-control" placeholder="Saisisez le poid"></td>'+
				'</tr>'+

				'<tr class="form-group">'+
					'<td>Taille :</td>'+
					'<td><input type="text" id="taille" class="form-control" placeholder="Saisisez la taille"></td>'+
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
				'<td><input type="text" id="pays" class="form-control" placeholder="Saisisez le pays"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Code Postal :</td>'+
				'<td><input type="number" id="code_postal" class="form-control" placeholder="Saisisez le code postal"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Ville :</td>'+
				'<td><input type="text" id="ville" class="form-control" placeholder="Saisisez la ville"></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Adresse L1 :</td>'+
				'<td><textarea type="text" id="adresse_l1" class="form-control" placeholder="ligne 1"></textarea> </td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Adresse L2 :</td>'+
				'<td><textarea type="text" id="adresse_l2" class="form-control" placeholder="ligne 2"></textarea> </td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Type de carte :</td>'+
				'<td>'+
					'<SELECT id="type_carte" class="form-control">'+
					'<OPTION VALUE="visa" selected="selected" >Visa </OPTION>'+
					'<OPTION VALUE="master">MasterCard</OPTION>'+
					'</SELECT>'+
				'</td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Numéro de carte :</td>'+
				'<td><input type="text" id="Num_Carte" class="form-control" placeholder="Saisisez le numero de la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
			'	<td>nom sur la carte :</td>'+
				'<td><input type="text" id="Nom_Carte" class="form-control" placeholder="Saisisez le nom écris sur la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>date d'+"'"+'expiration de la carte :</td>'+
				'<td><input type="date" id="Date_Expiration_Carte" class="form-control" placeholder="Saisisez la date d'+"'"+'expiration de la carte "></td>'+
		'	</tr>'+

			'<tr class="form-group">'+
				'<td>code de carte :</td>'+
				'<td><input type="text" id="code_carte" class="form-control" placeholder="Saisisez le code de la carte "></td>'+
			'</tr>'+

			'<tr class="form-group">'+
				'<td>Porte monnaie :</td>'+
				'<td><input type="text" id="banque" class="form-control" placeholder="Saisisez la quantité d'+"'"+'argent dans la banque "></td>'+
			'</tr>'+


		'</table>'



		);
	}

	else if($categorie == "vendeur"){
		$('#formulaireDown').html(''+

		'<table>'+

			'<tr class="form-group">'+
				'<td>Porte monnaie :</td>'+
				'<td><input type="text" id="banque" class="form-control" placeholder="Saisisez la quantité d'+"'"+'argent dans la banque "></td>'+
			'</tr>'+

		'</table>'
		);
	}

}



