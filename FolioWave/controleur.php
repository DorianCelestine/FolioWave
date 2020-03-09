<?php
	require 'vue.php';
	require 'modele.php';
	class controleur{
		private $vue;
		private $mod;

		public function __construct(){
			$this->vue=new Vue();
			$this->mod=new Modele();
		}

		public function getAff(){
			return $this->vue->getBody();
		}
	}
?>