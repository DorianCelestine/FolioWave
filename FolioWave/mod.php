<?php 
	require_once 'controleur.php';	
	class mod
	{
		function __construct()
 	    {
     		$ctrl = new controleur();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     		    case 'sendMail':
     		        $success=$ctrl->sendMail();
                    break;
     			default:
                    $ctrl->getAff();
     			    break;
     		}
    	}
	}
?>