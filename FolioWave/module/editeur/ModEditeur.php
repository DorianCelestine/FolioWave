<?php 
	require_once 'ControleurEditeur.php';	
	class ModEditeur
	{
		function __construct()
 	    {
     		$ctrl = new ControleurEditeur();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     		    case 'template':
     		        $ctrl->getTemplate();
                    break;
                case 'upload':
                    $ctrl->upload();
                    break;
     			default:
                    $ctrl->getForm();
     			    break;
     		}
    	}
	}
?>