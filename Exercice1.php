<?php
look_pdf($argv[1], 0);

function look_pdf($dir, $espace){

	//Gestion d'erreur
	if($dir == '' || !is_dir($dir)){
		echo "ERREUR: Merci de vérifier le chemin du dossier\r\n";
	}
	else{

		//On stoque le contenu du fichier dans un tableau
		$file = scandir($dir);

		//On parcourt le tableau
		foreach ($file as $value) {
			$b=0;

			//On recupère l'extension du fichier
			$path = $dir.'/'.$value;
			$extension=pathinfo($value, PATHINFO_EXTENSION);

			//Si l'élément est un dossier
			if(is_dir($path) && $value != '.' && $value != '..'){
				while($b != $espace){
					echo '     ';
					$b++;
				}
				$espace++;
				//On affiche le nom du dossier
				echo $value;
				echo "\r\n";

				//On appele la fonction recursivement
			 	look_pdf($path, $espace);
			 	$espace--;
			}

			//Si c'est un fichier jpg on affiche le nom du fichier
			elseif(is_file($path) && $value != '.' && $value != '..' && $extension == "jpg"){
				while($b != $espace){
					echo '     ';
					$b++;
				}
				echo $value;
				echo "\r\n";
			}
		}
	}
}