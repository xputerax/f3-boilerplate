<?php

$options = [
    'debug' => getenv('DEBUG'),
    'auto_reload' => getenv('DEBUG'),
    'strict_variables' => true,
    'cache' => $f3->get('FULLPATH') . '/app/Storage/Cache'
];
$loader = new Twig_Loader_Filesystem('app/Views');
$twig = new Twig_Environment($loader, $options);

return $twig;
