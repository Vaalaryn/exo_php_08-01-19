<?php
	$line = readline('Voulez vous ajouter ou voir les personnes referencer(a pour ajouter et v pour voir et q pour quitter)');
	$nbpersonne = 0;
	while ($line!= 'q') {
		if ($line == 'a'){
			$personne[$nbpersonne] = [
				'nom' => readline('Entrez son Nom : '),
				'prenom' => readline('Entrez son Prenom : '),
				'age' => readline('Entrez son Age : '),
				];
			$nbpersonne++;
			prompt('personne bien ajouter')
		}
		
		
		
		
		$line = readline('Voulez vous ajouter ou voir les personnes referencer(a pour ajouter et v pour voir et q pour quitter)');
	}
?>