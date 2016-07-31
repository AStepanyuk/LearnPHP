<?php

$vertical = requestVar ('vertical', 0);

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);


echo $twig->render('form.html.twig', ['vertical' => $vertical]);