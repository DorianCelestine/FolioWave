<?php
	require 'VueEditeur.php';
	require 'ModeleEditeur.php';
	class ControleurEditeur{
		private $vue;
		private $mod;

		public function __construct(){
			$this->vue=new VueEditeur();
			$this->mod=new ModeleEditeur();
		}

		public function getPalette(){
			return $this->vue->getAff($this->vue->getPalette());
		}

		public function getTemplate(){
			return $this->vue->getAff($this->vue->getTemplate());
		}

		public function getPreview(){
			return $this->vue->getPreview();
		}
	}
?>