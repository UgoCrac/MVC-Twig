<?php

// unset($_SESSION['user']);

//On appelle la fonction getAll()
$offresDao = new OffresDAO();

$offers = $offresDao->getAll();

//On affiche le template Twig correspondant
echo $twig->render('offres.html.twig', [
    'offers' => $offers,
]);
