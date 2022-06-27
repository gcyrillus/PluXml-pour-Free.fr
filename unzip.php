<?php
if(filter_has_var(INPUT_GET, 'zip')) {
	$filename = filter_input(INPUT_GET, 'zip', FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '@[\w-]+\.zip$@')));
	if(empty($filename)) { exit('Invalid request'); }
	if(!file_exists(__DIR__ . '/' . $filename)) { exit($filename . ' file not found' . PHP_EOL); }

	$zipFiles = array($filename);
} else {
	$zipFiles = glob('*.zip');
}

if(count($zipFiles) === 1) {
	header('Content-Type: text/plain; charset=UTF-8');
	$zip = new ZipArchive;
	if($zip->open(__DIR__ . '/' . $zipFiles[0])) {
		$zip->extractTo(__DIR__);
		$zip->close();

		header('Content-Type: text/plain; charset=UTF-8');
?>
🇬🇧 Congratulations
🇫🇷 Bravo !
🇪🇸 ¡Felicidades!
🇷🇺 Поздравления

<?= $zipFiles[0] ?> 🇬🇧 is unzipped / 🇫🇷 est déplié / 🇪🇸 está descomprimido / 🇷🇺 распакован.

🇬🇧 Have a good day !
🇫🇷 Bonne journée !
🇪🇸 ¡Qué tenga un buen día!
🇷🇺 Хорошего дня
<?php
	}

	exit;
}

if(count($zipFiles) === 0) {
	header('Content-Type: text/plain; charset=UTF-8');
?>
No zip file !

<?php
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Unzip an zip archive</title>
</head><body>
	<h1>
		🇬🇧 Click on an archive zip belows <br />
		🇫🇷 Cliquez sur une archive zip ci-dessous<br />
		🇪🇸 Haga clic en un archivo zip a continuación<br />
		🇷🇺 Нажмите на архивный zip ниже
	</h1>
	<ul>
<?php
foreach($zipFiles as $filename) {
?>
		<li><a href="?zip=<?= $filename ?>"><?= $filename ?></a></li>
<?php
}
?>
	</ul>
</body></html>
