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
                    session_unset();
                    $ctrl->getPalette();
                    break;
     		    case 'template':
     		        $_SESSION['palette']=$_POST['palette'];
     		        $ctrl->getTemplate();
                    break;
                case 'upload':
                    $ctrl->upload();
                    break;
                case 'form':
                    $_SESSION['template']=$_POST['template'];
                    $ctrl->getForm();
     			    break;
     			default:
                    $ctrl->getPalette();
     			    break;
     		}
    	}
	}
?>