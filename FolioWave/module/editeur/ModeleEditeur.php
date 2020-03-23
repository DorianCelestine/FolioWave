<?php
	class ModeleEditeur{
		function __construct(){
		}


        /*
         * Prend en parametre un nom de fichier qui va être téléchargé, (ici le nom d'un field puisque plusieurs fields doivent être passés en meme temps) et fait en sorte de le renommé avec un token stocké dans la session, peut modifier le nom de fichier si celui ci existe déja afin de forcer le téléchargement.
         */
    	public function upload($nom){
        	if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Vérifie si le fichier a été uploadé sans erreur.
                if(isset($_FILES[$nom]) && $_FILES[$nom]["error"] == 0){
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                    $filename = $_FILES[$nom]["name"];
                    $filetype = $_FILES[$nom]["type"];
                    $filesize = $_FILES[$nom]["size"];
            
                    // Vérifie l'extension du fichier
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
            
                    
                    // Vérifie le type MIME du fichier
                    if(in_array($filetype, $allowed)){
                        //le nouveau nom du fichier
                        $name.=$_SESSION['token'];
                        $name.= $_FILES[$nom]['name'];
                        //vérifie si il y a un doublon 
                        if(file_exists("upload/" . $name)){
                            while(file_exists("upload/" . $name)){
                                //modifie le nom du fichier temps qu'il existe déja dans l'ensemble de fichiers uploadés
                                $name= random_int(1, 1999).$name;
                            }
                        }
                        move_uploaded_file($_FILES[$nom]["tmp_name"], "upload/" . $name);
                        echo "Votre fichier a été téléchargé avec succès.";
                    } else{
                        echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    }
                } else{
                    echo "Error: ".$_FILES[$nom]["error"];
                }
            }
        }
	}
?>