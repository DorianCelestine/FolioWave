<?php
	class ModeleEditeur{
		function __construct(){
		}
		public function connectUser(){
    	 
    	}
    	 public function uploadTest(){
	       $upload_dir = "uploads/";
	       $info = pathinfo($_FILES["image"]["name"]);
	       $upload_file = $upload_dir . basename($_FILES["image"]["name"],'.'.$info["extension"]) .'-'.time().'.'.$info["extension"];
	       move_uploaded_file($_FILES["image"]["tmp_name"], $upload_file);
	    }
	}
?>