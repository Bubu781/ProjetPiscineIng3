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
		$('#formulaireDown').html('Musiques');
	}

	else if($categorie == "Sport_Et_Loisir"){
		$('#formulaireDown').html('Sport_Et_Loisir');
	}
}
