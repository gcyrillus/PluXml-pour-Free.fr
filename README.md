# PluXml-pour-Free.fr
version adaptée et modifiée pour une installation à la racine d'un hebergement free.fr ou a minima en PHP5.

<b>note</b> incompatible avec les hebergement de <b>chez.com</b> du à de trop nombreuses restriction des fonctions php5.

La réecriture d'url est désactivée si l'hebergement est free.fr et seul l'option sendmail est disponible afin que cette archive qui fonctionne avec php5 soit fonctionnelle.

L'installation se fait en deux étapes:

1. uploader à la racine de votre hebergement (ou dans le repertoire de votre choix) le fichier **pluxml-php5-free.php** et le fichier **PluXml-PHP5-Free.fr.zip** (version basé sur la 5.8.7)
2. taper ensuite dans votre navigateur l'url de votre site free + pluxml-php5-free.php , ce qui donne :  `http://monsite.free.fr/pluxml-php5-free.php` où *monsite* est à remplacer par le nom du votre.Si vous avez placé ces fichiers dans un sous repertoire, indiqué le dans la barre d'adresse : `http://monsite.free.fr/monsousDossier/pluxml-php5-free.php` .
L'archive va alors déployer une version de PluXml basée sur la Version 5.8.7, copier le fichier .htaccess pour que Free.fr active PHP5 et créer un dossier sessions si celui-ci est manquant.
3. Pluxml est lancé et la page d'installation s'affiche au premier lancement de PluXml . Suivez la procedure habituelle en indiquant votre nom, pseudo de connexion , indiquez un mot de passe personnel (et confirmez le une seconde fois), enfin donnez votre adresse mail qui vous permettra de recevoir des mails de votre site et de récuperer votre compte si vous oubliez votre mot de passe.

La procedure la plus longue est d'envoyer les fichiers via ftp sur votre hebergement, l'installation dependra du temps que vous allez mettre à remplir l'unique formulaire d'installation.

Maintenant que votre site est installé, il vous reste à choisir eventuellement un autre thème et d'y ajouter les quelques plugins qui vous sembleront indispensable.

Le forum https://forum.pluxml.org est ouvert à tous et vous permettra d'y trouver de l'aide . La recherche de ressources pour PluXml n'est pas toujours aisée .

 
 Cette version est compatible à partir de PHP5 , elle est elagué du script phpMailer et désactive la compression gzip et l'urlrewriting si l'hebergement est un serveur en free.fr .
 
 Sur free, ne tentez pas de faire usage de l'urlrewriting, cela inclus par exemple, le plugin MyBetterUrl . En cas de tentative, votre hebergement deviendra inaccessible en vous affichant une page erreur 500.
