<?php

/**
 * URL = /filter
 */

class Filter{
 public function __construct()
 {
     
   include __DIR__ . "/../models/FilterModel.php";//on fait appel à FilterModel 
   
   require_once __DIR__ . "/../../vendor/autoload.php";//on fait appel à Autoload pour utiliser SMARTY

   $model = new FilterModel();// on fait appel à la class FilterModel
   $caracts = [ "plein","chaud","vide","froid","interne","externe"];//affecter a la variable caracts ces caractéristiques
   $nom  = isset($_POST['nom']) ? $_POST['nom'] : '';//condition de "est ce que le nom exist"
   $type  = isset($_POST['type']) ? $_POST['type'] : '0';//condition de "est ce que le type est sélectionné"
   $caracteristique  = isset($_POST['caracteristique']) ? $_POST['caracteristique'] : "0";//même chose
   $pathologies =  $model->getPathologies($nom,$type,$caracteristique);// le controller envoie les paramètres qui sont à l'intérieur de la parenthèse à la fonction getPathologies qui se trouve dans le Model
   // Après c'est la variable pathologies qui récupère ces paramètres par les requêtes écrits dans la BD qui se trouve dans FilterModel.php
   
   $smarty = new Smarty();//on fait appel à la class SMARTY
   $smarty->setTemplateDir(__DIR__ . '/../views/');//définir le chemin des templates(Views)
   $smarty->assign('pathologies',$pathologies);// Smarty donne les paramètres à VIEW

   if(isset($_POST['nom']) || isset($_POST['type']) || isset($_POST['caracteristique'])){ //S'il y a une de ses paramètres

      $smarty->display('FilterResult.tpl'); // Smarty appelle le template FilterResult qui contient que le tabeau => voir le code de FilterResult

   }else{ 

      $smarty->assign('caracts',$caracts); //on ajoute les caractéristiques
   
      $smarty->display('FilterView.tpl');//sinon dans la cas contraire on fait appel à toute la page (tabeau + caracterisques+ type)
   }

    //include __DIR__ . "/../views/FilterView.php";//rentre dans view, tant qu'on est à l'intérieur de Controller
 }
}

