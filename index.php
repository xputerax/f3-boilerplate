<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->set('FULLPATH', $f3->get('ROOT') . $f3->get('BASE'));

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

require 'app/Routes/Web.php';
require 'app/Routes/CLI.php';

$f3->mset(require($f3->get('FULLPATH') . '/app/Config/config.php'));

$f3->set('ONERROR', function ($f3) {
    $error = $f3->get('ERROR');

    if (file_exists($f3->get('FULLPATH') . '/app/Views/errors/' . $error['code'] . '.twig')) {
        $f3->get('twig')->display('errors/' . $error['code'] . '.twig');
    } else {
        $f3->get('twig')->display('errors/general.twig');
    }
});

$f3->run();
