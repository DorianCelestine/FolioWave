
<?php    
    class Vue {
        public function getBody(){
           echo'<!DOCTYPE html>
                <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>FolioWave</title>
                    <script src="parallax.js"></script>
                    <link rel="stylesheet" href="style/index-style.css">
                </head>
                <body>
                    <main>
                        <div class="container">
                            <div class="header">
                                <div class="logo">
                                    <a href="index.php" id="title" class="wave"><img src="images/logo.png" alt="">FOLIOWAVE</a>
                                </div>
                                <div class="navlist">
                                    <p><a href="#contact" class="wave" id="contactLink">CONTACT</a></p>
                                </div>
                            </div>
                            <div id="essai">
                                <ul id="scene">
                                    <div class="row">
                                        <div class="col-5">
                                            <?php ?>
                                        </div>
                                        <div class="col-5">
                                            <li class="layer" data-depth="0.7">
                                                <a href="index.php?module=editeur&action=palette">
                                                    <button id="sun">START</button>
                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <script>
                                var scene = document.getElementById(\'scene\');
                                var parallax = new Parallax(scene);
                            </script>
                        </div>
                    </main>
                </body>
                <footer id="contact">
                    <div id="footerL">
                        <img src="images/logo2.png" alt="">
                    </div>
                    
                    <div id="footerR">
                        <p>Une question ? Une remarque ? N’hésitez pas à nous contacter par le biais de notre formulaire dédié.</p>
                        <form action="index.php?module=index&action=sendMail" method="POST">  
                            <div class="form-group">
                                <input type="email" class="form-control" name="mail" placeholder="Adresse email" required>
                            </div>
                            <div class="form-group">
                                <input type="nput-group-text" class="form-control" name="sujet" placeholder="Sujet du message" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" aria-label="With textarea" name="message" placeholder="Message" required></textarea> 
                            </div>
                            <button type="submit" class="btn btn-primary submit" id="submitsign">Envoyer</button>
                        </form>
                    </div>
                </footer>
                </html>';
        }
    }
?>
