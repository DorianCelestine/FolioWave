<?php 
	session_start();
	require 'controleur.php';
	$module = isset($_GET['module'])? $_GET['module'] : "index";
    $mod_ctrl;
	switch ($module) {
		case 'index':
            include_once 'mod.php';
			$mod_ctrl=new mod;
		break;
		case 'editeur':
		    include_once 'module/editeur/ModEditeur.php';
            $mod_ctrl = new ModEditeur;
		break;
		case 'contact' :
			$mod_ctrl= new modContact();
			$mod_ctrl->getAff();
		break;
		default : 
			die("ERREUR 403 : ACCES REFUSE !");
		break;
	}
?>