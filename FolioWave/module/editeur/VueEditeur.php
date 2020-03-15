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
                    <form id="f1" action="index.php?module=editeur&action=template" method="POST">
                    <input type="hidden" class="form-control" name="palette" value="p1"required>
                    <section>
                      <a href=\'#\' onclick=\'document.getElementById("f1").submit()\'>
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
                    </form>

                    <form id="f2" action="index.php?module=editeur&action=template" method="POST">
                    <input type="hidden" class="form-control" name="palette" value="p2"required>
                    <section>
                      <div>
                          <a href=\'#\' onclick=\'document.getElementById("f2").submit()\'>
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
                    </form>

                    <form id="f3" action="index.php?module=editeur&action=template" method="POST">
                    <input type="hidden" class="form-control" name="palette" value="p3"required>
                    <section>
                    <a href=\'#\' onclick=\'document.getElementById("f3").submit()\'>
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
                    </form>


                    <form id="f4" action="index.php?module=editeur&action=template" method="POST">
                    <input type="hidden" class="form-control" name="palette" value="p4"required>
                    <section>
                      <a href=\'#\' onclick=\'document.getElementById("f4").submit()\'>
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
                    </form>

                    <form id="f5" action="index.php?module=editeur&action=template" method="POST">
                    <input type="hidden" class="form-control" name="palette" value="p5"required>
                    <section>
                      <a href=\'#\' onclick=\'document.getElementById("f5").submit()\'>
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
                    </form>
                </div>
            </div>
            ';
        }

		public function getTemplate(){
      var_dump($_POST['palette']);
      var_dump($_POST['template']);
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
              <form id="f1" action="index.php?module=editeur&action=template" method="POST">
              <input type="hidden" class="form-control" name="template" value="t1"required>
              <section>
                  <a href=\'#\' onclick=\'document.getElementById("f1").submit()\'>
                      <div>
                          <div class="box">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                              <div class="content">
                                  <img src="template/t1.png" />
                              </div>
                          </div>
                      </div>
                  </a>
              </section>
              </form>

              <form id="f2" action="index.php?module=editeur&action=template" method="POST">
              <input type="hidden" class="form-control" name="template" value="t2"required>
              <section>
                  <a href=\'#\' onclick=\'document.getElementById("f2").submit()\'>
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
              </form>

              <form id="f3" action="index.php?module=editeur&action=template" method="POST">
              <input type="hidden" class="form-control" name="template" value="t3"required>
              <section>
                  <a href=\'#\' onclick=\'document.getElementById("f3").submit()\'>
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
              </form>';
		}

		public function getForm(){

		}
    }
?>
