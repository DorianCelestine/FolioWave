<?php session_start();
require_once('VueGenerique.php');
define('CONST_INCLUDE',NULL);
if (!defined('CONST_INCLUDE')){
    die('Accès direct interdit');
}
$tampon = new VueGenerique();

            if (!isset($_GET['module'])) {
                $module="index";
            }
            else {
                $module=htmlspecialchars($_GET['module']);
            }
    switch($module){
        case "index":
        case "palette":
            include 'module/'.$module.'/Mod'.$module.'.php';
            break;
        default :
            die("Erreur Index : Module inacessible.(".$module.")");
    }
    $module = $tampon->getAffichage();
    require('template.php');
?>