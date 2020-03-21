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
              <a href="https://www.cssparty.com/"  target="_blank">cssparty.com</a>
              </form>';
		}
    
		public function getForm(){
            //initialise une var de session avec un token random pour la suite du traitement du form
            if(!isset($_SESSION['token'])) $_SESSION['token']=random_int(0, 100);

            echo'
                <form action="index.php?module=editeur&action=upload" method="post" enctype="multipart/form-data">
                  <input type="text" name="nom" placeholder="nom" required>
                  <input type="text" name="prenom" placeholder="prenom" required>
                  
                  <label for="logo">Logo:</label>
                  <input type="file" name="logo" id="logo">
                 
                  <label for="image1">Image de couverture:</label>
                  <input type="file" name="image1" id="image1">                  
                  
                  <label for="image2">Image 2:</label>
                  <input type="file" name="image2" id="image2">
                  
                  <textarea name="texte1" required placeholder="decrivez votre portfolio brievement"></textarea>
            
                  <input type="text" name="l1" placeholder="Liens vers votre projet 1" required>
                    
                  <label for="imageP1">image projet 1:</label>
                  <input type="file" name="imageP1" id="imageP1">
                  
                  <input type="text" name="l2" placeholder="Liens vers votre projet 2" required>

                  <label for="imageP2">image projet 2:</label>
                  <input type="file" name="imageP2" id="imageP2">
                  
                  <input type="text" name="l3" placeholder="Liens vers votre projet 3" required>

                  <label for="imageP3">image projet 3:</label>
                  <input type="file" name="imageP3" id="imageP3">
                  
                  <input type="text" name="l4" placeholder="Liens vers votre projet 4" required>
                  
                  <label for="imageP4">image projet 4:</label>
                  <input type="file" name="imageP4" id="imageP4">
                  
                  <textarea name="texte2" placeholder="Petit texte de contact" required></textarea>

                  <label for="image3">image 3:</label>
                  <input type="file" name="image3" id="image3">
                  
                  <input type="text" name="lkn" placeholder="Liens vers votre linkedin" required>
                  
                  <input type="text" name="fb" placeholder="Liens vers votre Facebook" required>
                  
                  <input type="text" name="twt" placeholder="Liens vers votre twitter" required>
                          <input type="submit" name="submit" value="Upload">

                </form>
              ';
		}
  }
?>
