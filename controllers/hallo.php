<?php

$name = requestVar('name', "Neznakomets");
$last_name = requestVar('last_name', "Bez family");

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('hello.html.twig', [
    'name' => $name,
    'last_name' => $last_name
]);