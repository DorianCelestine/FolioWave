<?php session_start();
require_once('VueGenerique.php');
define('CONST_INCLUDE',NULL);
if (!defined('CONST_INCLUDE')){
    die('Accès direct interdit');
}
$tampon = new VueGenerique();

            if (!isset($_GET['module'])) {
                $module = $tampon->getAffichage();
            }
            else {
                $module = $tampon->getAffichage();
            }
    $module = $tampon->getAffichage();
    require('template.php');
?>