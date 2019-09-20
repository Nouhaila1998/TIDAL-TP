<?php

/**
 * URL = /filter
 */

class Filter{
 public function __construct()
 {
     
   include __DIR__ . "/../models/FilterModel.php";
   
   require_once __DIR__ . "/../../vendor/autoload.php";

   $model = new FilterModel();// rentre dans la classe FilterModel 
   $caracts = [ "plein","chaud","vide","froid","interne","externe"];
   $nom  = isset($_POST['nom']) ? $_POST['nom'] : '';
   $type  = isset($_POST['type']) ? $_POST['type'] : '0';
   $caracteristique  = isset($_POST['caracteristique']) ? $_POST['caracteristique'] : "0";
   $pathologies =  $model->getPathologies($nom,$type,$caracteristique);// pemet de faire appel à la fonction getPathologies
   $pathoTypes =  $model->getPathoTypes();// pemet de faire appel à la fonction getPathologies

   $smarty = new Smarty();
   $smarty->setTemplateDir(__DIR__ . '/../views/');
   $smarty->assign('pathologies',$pathologies);

   if(isset($_POST['nom']) || isset($_POST['type']) || isset($_POST['caracteristique'])){

      $smarty->display('FilterResult.tpl');

   }else{

      $smarty->assign('pathoTypes',$pathoTypes);
      $smarty->assign('caracts',$caracts);
   
      $smarty->display('FilterView.tpl');
   }

    //include __DIR__ . "/../views/FilterView.php";//rentre dans view, tant qu'on est à l'intérieur de Controller
 }
}

