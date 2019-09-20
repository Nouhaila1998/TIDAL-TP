<?php

$project_folder = "/".basename(dirname(__FILE__));

if(isset($_GET['url'])){
    $url = $_GET['url'];//ramène l'URL
    $url = rtrim($url, '/');//enlève les / ajoutées à la fin 
    $url = explode('/', $url);//voir fichier WORD
    
    $controller = ucfirst($url[0]) . "Controller.php";

    // ucfirst : permet de rendre le premier caractèer en majuscule
    if( file_exists("app/controllers/$controller") ){
        // Si le filchier app/controllers/{url}Controller.php
        include "app/controllers/$controller"; //voir WORD
        $class = ucfirst($url[0]);
        new $class(); // new Filter(), appel à la classe Filter qui se trouve dans FilterController.php
    }else{
        // Sinon
        echo "Page not found";
    }

}else{
    echo "this is default page";
}

function sum($a,$b){
    echo $a + $b;
}
