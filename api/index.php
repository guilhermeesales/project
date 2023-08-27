<?php
    session_start();

    $autoload = function($class) {

        if(file_exists($class. ".php")) {
            include($class.".php");

        } else {
            die("Não foi possível encontrar a classe {$class}");

        }

    };

    
    spl_autoload_register($autoload);

    $application = new Application();
    $application->execute();
?>