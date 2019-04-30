loadFormulaireNewItem = () =>{
	$categorie = $('#categorie').val();


	if($categorie == "Vetements"){
		$('#formulaireDown').html('Vetements');
	}

	else if($categorie == "Livres"){
		$('#formulaireDown').html('Livres');
	}

	else if($categorie == "Musiques"){
		$('#formulaireDown').html('Musiques');
	}

	else if($categorie == "Sport_Et_Loisir"){
		$('#formulaireDown').html('Sport_Et_Loisir');
	}
}
