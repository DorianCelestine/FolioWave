<?php 
	session_start();
	require 'controleur.php';
	$module = isset($_GET['module'])? $_GET['module'] : "index";
	$ctrl = new controleur();
	$mod_ctrl;
	switch ($module) {
		case 'index':
			$ctrl->getaff(NULL);
		break;
		case 'editeur':
			$mod_ctrl= new modEdit;
			$mod_ctrl->getAff();
		break;
		case 'contact' :
			$mod_ctrl= new modContact;
			$mod_ctrl->getAff();
		break;
		default : 
			die("ERREUR 403 : ACCES REFUSE !");
		break;
	}
?>