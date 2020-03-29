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
                <link rel="stylesheet" href="style/index-style.css">
                <link rel="stylesheet" href="style/palette.css">
                <link rel="stylesheet" href="style/animation.css">
                <link rel="stylesheet" href="style/form.css">
            </head>
                    
            <body>'.$contenu.'</body>
        </html>';
    }

    public function getFrame(){
        
        echo'<!DOCTYPE html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>FolioWave</title>
                <script src="parallax.js"></script>
                <link rel="stylesheet" href="style/index-style.css">
                <link rel="stylesheet" href="style/palette.css">
                <link rel="stylesheet" href="style/animation.css">
                <link rel="stylesheet" href="style/form.css">
            </head>
            <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLIOWAVE</a>
                </div>
                <div class="navlist">
                    <p><a href="index.php#contact" class="wave" id="contactLink">CONTACT</a></p>
                </div>
                
            </div>
            <button id="btndl"><a href="/index.php?module=editeur&action=telecharger">Télécharger l\'archive</a></button>

            <body><iframe src="/Dossiers/'.$_SESSION['dossier'].'/index.html"></iframe>
            </body>
        </html>';
       
    }

    public function getPalette(){
        echo'
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLIOWAVE</a>
                </div>
                <div class="navlist">
                    <p><a href="index.php#contact" class="wave" id="contactLink">CONTACT</a></p>
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
                        <a href=\'#\' onclick=\'document.getElementById("f2").submit()\'>
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
        </div>';
        }

    public function getTemplate(){
        echo'
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLIOWAVE</a>
                </div>
                <div class="navlist">
                    <p><a href="index.php#contact" class="wave" id="contactLink">CONTACT</a></p>
                </div>
            </div>

            <div class="center">
                <form id="f1" action="index.php?module=editeur&action=form" method="POST">
                    <input type="hidden" class="form-control" name="template" value="t1"required>
                    <section
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

                <form id="f2" action="index.php?module=editeur&action=form" method="POST">
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
                        </a>
                    </section>
                </form>

                <form id="f3" action="index.php?module=editeur&action=form" method="POST">
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
                </form>
            </div>
        </div>';
		}
    
    public function getForm(){
        //initialise une var de session avec un token random pour la suite du traitement du form
        if(!isset($_SESSION['token'])) $_SESSION['token']=random_int(0, 100);
        echo'
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLIOWAVE</a>
                </div>
                <div class="navlist">
                    <p><a href="index.php#contact" class="wave" id="contactLink">CONTACT</a></p>
                </div>
            </div>
            
            <div id=formu>
            <form action="index.php?module=editeur&action=upload" method="post" enctype="multipart/form-data">
                <div class="left">
                    <input type="text" name="nom" placeholder="nom" required><br/>
                    <input type="text" name="prenom" placeholder="prenom" required>
                </div>
                <div class="right">
                    <textarea name="texte1" id="ta" required placeholder="Phrase d\'accroche"></textarea>
                </div>
                
                <div class="left">
                    <label for="logo">Logo:</label><br/>
                    <input type="file" name="logo">
                </div>
                    
                <div class="right">
                    <label for="image1">Image de couverture:</label><br/>
                    <input type="file" name="image1" id="image1">
                </div>
                
                <div class="texte">
                    <textarea name="texte2" required placeholder="decrivez votre portfolio brievement"></textarea>
                    <div>
                        <label for="image2">Image 2:</label></br>
                        <input type="file" name="image2" id="image2" id="test">
                    </div>
                </div>
                
                <div class="left">
                    <label for="imageP1">Image projet 1:</label><br/>
                    <input type="file" name="imageP1" id="imageP1"><br/>
                    <input type="text" name="l1" placeholder="Lien vers votre projet 1" required>          
                </div>
                
                <div class="right">
                    <label for="imageP2">Image projet 2:</label><br/>
                    <input type="file" name="imageP2" id="imageP2"><br/>
                    <input type="text" name="l2" placeholder="Lien vers votre projet 2" required>
                </div>
                
                <div class="left">
                    <label for="imageP3">Image projet 3:</label><br/>
                    <input type="file" name="imageP3" id="imageP3"><br/>
                    <input type="text" name="l3" placeholder="Lien vers votre projet 3" required>
                </div>
                
                <div class="right">
                    <label for="imageP4">Image projet 4:</label><br/>
                    <input type="file" name="imageP4" id="imageP4"><br/>
                    <input type="text" name="l4" placeholder="Lien vers votre projet 4" required>
                </div>
                
                <div class="texte">
                    <textarea name="texte3" placeholder="Petit texte de contact" required></textarea>
                    <div>
                        <label for="image3">Image 3:</label><br/>
                        <input type="file" name="image3" id="image3">
                    </div>
                </div>
                
                <div id="social">
                    <input type="text" name="lkn" placeholder="Lien vers votre linkedin" required>
                    <input type="text" name="fb" placeholder="Lien vers votre Facebook" required>
                    <input type="text" name="twt" placeholder="Lien vers votre twitter" required>
                </div>
                
                <center>
                    <input type="submit" name="submit" value="Upload">
                </center>
            </form>
            </div>
        </div>';
    }
}
?>
