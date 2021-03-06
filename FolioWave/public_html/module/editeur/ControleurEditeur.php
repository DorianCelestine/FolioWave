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

        public function getForm(){
            return $this->vue->getAff($this->vue->getForm());
        }

	    public function upload(){
           $this->mod->Dossier();
		    $fields = array("logo", "image1", "image2", "imageP1", "imageP2", "imageP3", "imageP4", "image3");
            foreach ($fields as &$value) {
                $this->mod->upload($value);
            }
            $this->mod->htmlFichier("null");
            $this->mod->cssFichier();
            $this->mod->copieImages();
            $this->mod->addzip($_SESSION['dossier']);
            $this->vue->getFrame();
    	}
    	
    	public function telecharger(){
            $this->mod->telecharger();
    	}
		

	}
?>