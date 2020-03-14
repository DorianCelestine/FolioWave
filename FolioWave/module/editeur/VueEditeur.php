<?php    
    class VueEditeur {
        
        public function getAff($contenu){
        	echo'<!DOCTYPE html>
                <html lang="fr">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>FolioWave</title>
                        <script src="parallax.js"></script>
                        <link rel="stylesheet" href="index-style.css">
                        <link rel="stylesheet" href="palette.css">
                        <link rel="stylesheet" href="animation.css">
                    </head>
                    
                    <body>'
                    .$contenu.
                    '</body>
                </html>';
        }

        public function getPalette(){
           	echo'
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLLIOWAVE</a>
                    </div>
                    <div class="navlist">
                        <p><a href="#" class="wave" id="contactLink">CONTACT</a></p>
                    </div>
                </div>

                <div class="center">
                    <section>
                        <a href="index.php?module=editeur&action=template">
                            <div>
                                <div class="box">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="content">
                                        <img src="style/palette_1.png"/>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </section>

                    <section>
                      <a href="index.php?module=editeur&action=template">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="style/palette_2.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>

                    <section>
                      <a href="index.php?module=editeur&action=template">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="style/palette_3.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>

                    <section>
                      <a href="index.php?module=editeur&action=template">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="style/palette_4.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>

                    <section>
                      <a href="index.php?module=editeur&action=template">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="style/palette_5.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>
                </div>
            </div>
            ';
        }

		public function getTemplate(){
      echo'
      <div class="container">

        <div class="header">
          <div class="logo">
            <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLLIOWAVE</a>
          </div>
          <div class="navlist">
            <p><a href="#" class="wave" id="contactLink">CONTACT</a></p>
          </div>
        </div>

        <div class="center">
          <section>
            <a href="index.php">
                            <div>
                                <div class="box">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="content">
                                        <img src="template/t1.png"/>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </section>

                    <section>
                    <a href="index.php">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="template/t2.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>

                    <section>
                    <a href="index.php">
                      <div>
                          <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                              <img src="template/t3.png">
                            </div>
                          </div>
                      </div>
                      </a>
                    </section>
                    ';
		}

		public function getForm(){

		}
    }
?>
