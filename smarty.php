<?php

require_once "./vendor/autoload.php";

$smarty = new Smarty();
$smarty->assign('name','Nouhaila');


$smarty->display("affichage.tpl");

//echo "Smarty";


?>