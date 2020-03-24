<?php 
	require_once 'ControleurEditeur.php';	
	class ModEditeur
	{
		function __construct()
 	    {
     		$ctrl = new ControleurEditeur();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
                case 'palette':
                    $ctrl->getPalette();
                    break;
     		    case 'template':
     		        $ctrl->getTemplate();
                    break;
                case 'upload':
                    $ctrl->upload();
                    break;
                case 'form':
                    $ctrl->getForm();
     			    break;
     			default:
                    $ctrl->getPalette();
     			    break;
     		}
    	}
	}
?>