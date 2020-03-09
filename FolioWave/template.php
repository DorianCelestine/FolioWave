<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FolioWave</title>
    <script src="parallax.js"></script>
    <link rel="stylesheet" href="index-style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
</head>
<body>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="#" id="title" class="wave"><img src="images/logo.png" alt="">FOLLIOWAVE</a>
                </div>
                <div class="navlist">
                    <p><a href="#" class="wave" id="teste">CONTACT</a></p>
                </div>
            </div>
            <div id="essai">
                <ul id="scene">
                    <div class="row">
                        <div class="col-5">
                            <? = $module ?>
                        </div>
                        <div class="col-5">
                            <li class="layer" data-depth="0.7">
                                <?php
                                    echo '<a href="index.php?module=palette&action=palette"><button>Commencer maintenant</button></a>';
                                ?>
                            </li>
                            
                        </div>
                    </div>
                </ul>
            </div>
            <script>
                var scene = document.getElementById('scene');
                var parallax = new Parallax(scene);
            </script>
        </div>
    
</body>
</html>