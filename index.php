<?php
	$line = readline("Voulez vous ajouter ou voir les personnes referencer \n (a pour ajouter et v pour voir et q pour quitter) : ");
	$nbpersonne = 0;
	while ($line!= 'q') {
		if ($line == 'a'){
			$personne[$nbpersonne] = [
				'nom' => readline('Entrez son Nom : '),
				'prenom' => readline('Entrez son Prenom : '),
				'age' => readline('Entrez son Age : '),
				];
			$nbpersonne++;
			echo "personne bien ajouter\n";
		}
		if ($line == 'v'){
			$counter = 1;
			foreach($personne as $per){
				if ($per['age'] >= 18){
					echo $counter.' - '.$per['nom'].' '.$per['prenom']."\n";
					$counter++;
				}
			}
		}
		$line = readline("Voulez vous ajouter ou voir les personnes referencer \n (a pour ajouter et v pour voir et q pour quitter) : ");
	}
?>