README


Pour commencer tout mon site est en PHP, je fonctionne de la maniere suivant à la racine j'ai 2 dossiers,
- SOURCE qui contien toutes mes souces en JS non minifier, et mes source en SAS (.scss)
- DEPLOY est le dossier qui contient tout mon site, dedans se trouve, les pages de base du site, un dossiers CSS, un dossiers FONTS, un dossiers IMG, un dossiers JS, un dossiers INCLUDE, un dossiers PROCESS et un dossiers TONGUER_FILES.

- Dans le dossier INCLUDE sont stoker tout mes include.
- Dans le dossier PROCESS sont stoker tout mes fichier php qui execute divers tache.

J'ai réaliser toutes les pages moi meme à l'exeption d'un script PHP "php_mo.php" que j'ai du prendre sur internet par manque de temps. Celui ci copy et tranforme les fichier PO en fichier MO.

Mon défi:

Mon defi consiste en plusieurs manipilations de fichier et des donners qu'il contienne.

Ma procedure:

- 0 ( je passe la creation des compt et les login, l'invitation aux projet, ... )
- 1 (Creation de projet (upload d'un site en zip) => Dézippage
- 2 Creation des repertoire
- 3 Creation des detections des contenu util ( gettext )
- 4 Creation d'un fichier PO et MO
- 5 Remplissage du fichier PO er MO
- 6 Grace au fichier PO creation d'une SITE-MAP
- 7 Grace au fichier PO creation d'une interphase qui liste le contenu (util) du fichier PO
- 8 Rendre le contenu du Fichier PO editable via l'interphase

Il y à surment quelques bugs mais ca fonctionne !


2014 HEAJ, DWM,
Antonin Lambinet 3TiD2.