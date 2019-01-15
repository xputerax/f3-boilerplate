<?php

$path = $f3->get('FULLPATH') . '/app/Config/';

return [

    /**
     * System Variables
     * 
     * https://fatfreeframework.com/3.6/quick-reference#SystemVariables
     * 
     * */
    
    'DEBUG' => 3,
    'LOGS' => './app/Storage/Logs',
    'TEMP' => './app/Storage/Temp',

    /** Configurations */

    'globals' => require $path . 'globals.php',
    'maps' => require $path . 'maps.php',
    'redirects' => require $path . 'redirects.php',
    'routes' => require $path . 'routes.php',

    /** Dependencies */

    'twig' => require $path . 'twig.php',
    'database' => require $path . 'database.php'
];