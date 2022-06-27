# PluXml-pour-Free.fr
version adaptée et modifiée pour une installation à la racine d'un hebergement free.fr en PHP5

La réecriture d'url est désactivée si l'hebergement est free.fr et seul l'option sendmail est disponible afin que cette archive qui fonctionne avec php5 soit fonctionnelle.

L'installation se fait en deux étapes:

1. uploader à la racine de votre hebergement le fichier **unzip.php** et le fichier **PluXml-5.8.7-Free-Fr.zip**
2. taper ensuite dans votre navigateur l'url de votre site free + unzip.php , ce qui donne :  `http://monsite.free.fr/unzip.php` où *monsite* est à remplacer par le nom du votre. 
L'archive va alors déployer une version de PluXml basée sur la Version 5.8.7, copier le fichier .htaccess pour que Free.fr active PHP5 et créer un dossier sessions.
3. taper l'adresse de votre site free.fr tout neuf : `http://nomdevotresite.free.fr` et suivez la procédure d'installation en indiquant votre nom, pseudo de connexion , indiqué un mot de passe personnel (et confirmé le une seconde fois), enfin donnez une adresse votre adresse mail qui vous permettra de recevoir des mails de votre site et de récuperer votre compte si vous oubliez votre mot de passe.

La procedure la plus longue est d'envoyer les fichiers via ftp sur votre hebergement, l'installation dependra du temps que vous metterait à remplir l'unique formulaire d'installation.

Maintenant que votre site est installé, il vous restera à choisir eventuellement un autre thème et d'y ajouter les quelques plugins qui vous sembleront indispensable.

Le forum https://forum.pluxml.org est ouvert à tous et vous permettra d'y trouver de l'aide . La recherche de ressources pour PluXml n'est pas toujours aisée .

CREDITS : http://pluxml.org https://www.kazimentou.fr/static8/download https://github.com/gcyrillus/
 - le fichier **unzip.php** est un utilitaire devellopé par Kazimentou alias bazooka07 , moderateur du forum de PluXml , l'un des contributeurs des plus actif du CMS PluXml ainsi que l'auteur de nombreux plugins pour PluXml.
 - le fichier **PluXml-5.8.7-Free-Fr.zip**  contient PluXml ainsi que le fichier **.htaccess** et le dossier **sessions** dediés a `free.fr`. C'est une version elagué (de pluxml-single.zip @bazooka07) des options d'urlrewriting et options de services mail(incompatibles php5).
