<?php

    //Test Grafikart avec composer 
    require 'vendor/autoload.php';

    // solution sans ajout autoload dnas composer.json
    // require "APP/From.php";

    echo APP\From::input();

    use Michelf\Markdown;

    echo Markdown::defaultTransform('test **markdown** !!!');
        // echo '<input type="password">';
    echo date('d/m/Y h:i:s');

?>