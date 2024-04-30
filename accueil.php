<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('base.twig', [
	'titre' => 'Page d\'accueil',
	'slogan' => 'Un message de bienvenu sur ma page d\'accueil. Attention les guillements doivent être échappées (avec un anti-slash)'
]);
