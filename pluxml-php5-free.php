<?php
if (version_compare(phpversion(), '5', '<') ) {	
	if (substr($_SERVER['HTTP_HOST'] , -7)  != 'free.fr')  {
		echo phpversion() .' cannot run this script, please update to a version of PHP 5.x or later.';
		exit;
	}
	else {	// == hebergement sur free en php4	
			// find root
			$root = dirname( __FILE__ );// on recupere l'emplacement
			$filePath = realpath(dirname(__FILE__)); // on recupere le chemin complet sur le server
			$rootPath = realpath($_SERVER['DOCUMENT_ROOT']);// on recupere le chemin complet de la racine du serveur
			$dirPath = str_replace($rootPath, '', $filePath);// on ne garde que la partie partant de la racine de l'hebergement pubique
			$prefX ='';// initialisation
			$downLvl= '../';// cemein vers un dossier inferieur
			$i = 1 ; // initialisation de i pour la boucle
			$up = substr_count($dirPath,"/");// combien de dossier avons nous depuis la racine
			settype($up, "integer");// c'est un chiffre !
			settype($prefX, "string");// c'est du texte !!
			while ($i <= $up) {
				$i++;
			$prefX .= '../';	// pour remonter dans chaque dossier parent trouvé
			}
			if($prefX !='') {$dirPath .='/';}//place le fichier dans son dossier parent
			
			// repertoire sessions
			$sessionsDir = 'sessions';
			// test si le repertoire sessions est là		
			if(!is_dir(trim($prefX).$sessionsDir)){
				//si non, on le créer.
				mkdir(trim($prefX).$sessionsDir, 0755);
			}			
			$file_name = '.htaccess'; // notre fichier pour émuler php5 sur free.fr
			$myFreeHtaccess= trim($prefX).$file_name;// notre chemin publique vers la racine
			$myfile = fopen($myFreeHtaccess, 'w') or die('Cannot open file: '.$myFreeHtaccess); // on crée le fichier en l'ouvrant 
			$content = "<IfDefine Free>
php56 1
</IfDefine>";// contenu du fichier pour que le serveur tourne avec php 5
			fwrite($myfile, $content);// on ecrit et sauvegarde
			fclose($myfile);// on libere le nouveau fichier et la memoire
			header('location :'.$_SERVER['REQUEST_URI']);// on relance le script qui devrait tourné sous php 5 et passé au dépliement de l'archive de PluXml.
		
	}
}
else {
	// comme on a au moins php5, on verifie que notre archive de PluXml special php5 est bien là
	if(!file_exists(__DIR__ . '/PluXml-PHP5-Free.fr.zip')) 
		{ 
			exit('Fichier <b>PluXml-PHP5-Free.fr.zip</b> absent. ' . PHP_EOL);// pas là!? bon bah faut la mettre!
		}
	// si pas exit, alors on deploie l'archive
	$zip = new ZipArchive;
	if($zip->open(__DIR__ . '/PluXml-PHP5-Free.fr.zip')) {
		$zip->extractTo(__DIR__);
		$zip->close();
	// archive déployer  on lance PluXml
		// on efface les fichiers devenus inutiles
		unlink(__FILE__);
		unlink('PluXml-PHP5-Free.fr.zip');
		header('location: ./index.php');
		exit;
	}
	else {
		echo 'Le deploiement de l\'archive à echoué.';
	}
}
?>