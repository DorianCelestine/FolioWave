<?php
	class ModeleEditeur{
		function __construct(){
		}

        /*
         * Récupère les bonne couleurs pour le CSS et les mets en var de Session
         */
        public function paletteToSession(){
            if($_POST['palette']="p1"){
                $_SESSION['coul1']="#525252";
                $_SESSION['coul2']="#414141";
                $_SESSION['coul3']="#313131";
                $_SESSION['coul4']="#ec625f";
            }
            else if($_POST['palette']="p2"){
                $_SESSION['coul1']="#022c43";
                $_SESSION['coul2']="#053f5e";
                $_SESSION['coul3']="#115173";
                $_SESSION['coul4']="#ffd700";
            }
            else if($_POST['palette']="p3"){
                $_SESSION['coul1']="#eeeeee";
                $_SESSION['coul2']="#dedede";
                $_SESSION['coul3']="#ff4949";
                $_SESSION['coul4']="#c10000";
            }
            else if($_POST['palette']="p4"){
                $_SESSION['coul1']="#494ca2";
                $_SESSION['coul2']="#8186d5";
                $_SESSION['coul3']="#c6cbef";
                $_SESSION['coul4']="#e3e7f1";
            }
            else{
                $_SESSION['coul1']="#333333";
                $_SESSION['coul2']="#ffffff";
                $_SESSION['coul3']="#e1f4f3";
                $_SESSION['coul4']="#706c61";
            }
        }

        /*
         * Creer le fichier CSS pour l'utilisateur
         */
        public function cssFichier(){
            $this->paletteToSession();
            if($_POST['template']=="t1"){
                $code = $this->style1();
            }else if($_POST['template']=="t2"){
                $code = $this->style2();
            }else{
                $code = $this->style3();
            }
            $my_file = 'Dossiers/'.$_SESSION['dossier'].'/style.css';
            $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
            fwrite($handle, $code);
            fclose($handle);
        }
        
        
        /*
         * Creer le fichier HTML pour l'utilisateur
         */
        public function htmlFichier(){
            $code = '<!DOCTYPE html>
                    <html lang="fr">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>tittle</title>
                        <link rel="stylesheet" href="style.css">
                        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
                    </head>';
            
            
            if($_POST['template']=="t1"){
                $code= $code. $this->Html1();
            }else if($_POST['template']=="t2"){
                $code= $code. $this->Html2();
            }else{
                $code= $code. $this->Html3();
            }
            $my_file = 'Dossiers/'.$_SESSION['dossier'].'/index.html';
            $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
            fwrite($handle, $code);
            fclose($handle);
        }
        
        /*
         * Correspond au template 1 
         */
        public function Html1(){
            return '
            <body>
                <section>
                    <div id="page1">
                        <div id="texte1">
                            <img id="img0" src="'.$_SESSION['logo'].'"/>
                            <h1>'.$_POST['nom'].' '.$_POST['prenom'].'</h1>
                            <p>'.$_POST['texte1'].'</p>
                        </div>
                        <img id="page1Img" src="'.$_SESSION['image1'].'"/>
                    </div>
                    
                    <div id="page2">
                        <div id="texte2">
                            <p> <!-- presentation de la personne -->
                            '.$_POST['texte2'].'
                            </p>
                        </div>
                        <div id="imgPage2">
                            <img id="page2Image" src="'.$_SESSION['image2'].'"/>
                        </div>
                    </div>
                    
                    <div id="page3">
                        <div id="bloc3">
                            <div id="bloc3left">
                                <a href="'.$_POST['l1'].'">
                                    <img id="img3Lleft" src="'.$_SESSION['imageP1'].'"/>
                                </a>
                                <a href="'.$_POST['l2'].'">
                                    <img id="img3Lright" src="'.$_SESSION['imageP2'].'"/>
                                </a>
                            </div>
                            <div id="bloc3right">
                                <a href="'.$_POST['l3'].'">
                                    <img id="img3Rleft" src="'.$_SESSION['imageP3'].'"/>
                                </a>
                                <a href="'.$_POST['l4'].'">
                                    <img id="img3Rright"src="'.$_SESSION['imageP4'].'"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="page4">
                        <div id="corps4">
                            <div id="left4">
                                <img id="img4" src="'.$_SESSION['image3'].'"/>
                            </div>
                            <div id="right4">
                                <h1>Contactez moi</h1>
                                <p>'.$_POST['texte3'].'</p>
                                <a id="sonFB" href="'.$_POST['fb'].'">
                                    <img class="p4img" src="fb.png"/>
                                </a>
                                <a id="sonIN" hhref="'.$_POST['lkn'].'">
                                    <img class="p4img" src="in.png"/>
                                </a>
                                <a id="sonTW" href="'.$_POST['twt'].'">
                                    <img class="p4img" src="tw.png"/>
                                </a>
                            </div>
                        </div>
                        <div id="footer4">
                            <p>footer</p>
                        </div>
                    </div>
                </section>
            </body>
        </html>';
        }
        
        public function Html2(){
            return '
            <body>
                <header>
                    <p>'.$_POST['nom'].' '.$_POST['prenom'].'</p>
                    <img src="'.$_SESSION['logo'].'"/>
                </header>
                <section>
                    <div class="page">
                        <div id="texte1">
                            <h1 id="p1h1">'.$_POST['texte1'].'</h1>
                        </div>
                        <div id="bottom1">
                            <img id="img1" src="'.$_SESSION['image1'].'"/>
                        </div>
                    </div>
                    
                    <div class="page">
                        <img id="imgP2" src="'.$_SESSION['image2'].'"/>
                        <div id="rightP2">
                            <p>'.$_POST['texte2']'</p>
                            <a id="sonFB"href="'.$_POST['fb'].'">
            					<img class="p2img" src="fb.png"/>
            				</a>
            				<a id="sonIN" href="'.$_POST['lkn'].'">
            					<img class="p2img" src="in.png"/>
            				</a>
            				<a id="sonTW" href="'.$_POST['twt'].'">
            					<img class="p2img" src="tw.png"/>
            				</a>
                        </div>
                    </div>
                    
                    <div class="page" id="p3">
                        <div id="left3">
                            <a href="'.$_POST['l1'].'">
                                <img id="img1_3" src="'.$_SESSION['imageP1'].'"/>
                            </a>
                            <a href="'.$_POST['l2'].'">
                                <img id="img2_3" src="'.$_SESSION['imageP2'].'"/>
                            </a>
                        </div>
                        <div id="right3">
                            <a href="'.$_POST['l3'].'">
                                <img id="img3_3" src="'.$_SESSION['imageP3'].'"/>
                            </a>
                            <a href="'.$_POST['l4'].'">
                                <img id="img4_3" src="'.$_SESSION['imageP4'].'"/>
                            </a>
                        </div>
                    </div>
                    <div class="page">
                        <div id="corps4">
                            <div id="top4">
                                <img id="img4"  src="'.$_SESSION['image3'].'"/>
                            </div>
                            <div id="bottom4">
                                <p>'.$_POST['texte3'].'</p>
                            </div>
                        </div>
                        <div id="footer">
                            <p>footer</p>
                        </div>
                    </div>
                </section>
            </body>
            </html>';
        }
        
        public function Html3(){
            return '
            <body>
                <header>
                    <ul>
                        <li id="listLogo">
                            <img src="'.$_SESSION['logo'].'"/>
                        </li>
                        <li id="listReseaux">
                            <a id="sonFB" href="'.$_POST['fb'].'">
                                <img src="fb.png"/>
                            </a>
                            <a id="sonIN" href="'.$_POST['lkn'].'">
                                <img src="in.png"/>
                            </a>
                            <a id="sonTW" href="'.$_POST['twt'].'">
                                <img src="tw.png"/>
                            </a>
                        </li>
                    </ul>
                </header>
                
                <section>
                    <div id="page1">
                        <div id="left1">
                            <div id="titre">
                                <p>'.$_POST['nom'].' '.$_POST['prenom'].'</p>
				            </div>
                            <div id="texte1"><!-- phrase d\'accroche ou autre barratin d\'intro -->
					           <p>'.$_POST['texte1'].'</p>
                            </div>
                        </div>
                        <img id="right1" src="'.$_SESSION['image1'].'"/>
                    </div>
                    
                    <div id="page2">
                        <div id="top1">
                            <div id="texte2"><!-- presentation de la personne -->
                                <p>'.$_POST['texte2'].'</p>
                            </div>
                        </div>
                        <img id="bottom1" src="'.$_SESSION['image2'].'">
                    </div>
                    
                    <div id="page3">
                        <div id="proj1">
                            <a href="'.$_POST['l1'].'">
                                <img id="projet1" src="'.$_SESSION['imageP1'].'">
                            </a>
                        </div>
                        <div id="othersProjs">
                            <div id="topProjs">
                                <a href="'.$_POST['l2'].'">
                                    <img id="projet2" src="'.$_SESSION['imageP2'].'">
                                </a>
                                <a href="'.$_POST['l3'].'">
                                    <img id="projet3" src="'.$_SESSION['imageP3'].'">
                                </a>
				            </div>
                            <div id="bottomProjs">
                                <a href="'.$_POST['l4'].'">
                                    <img id="projet4" src="'.$_SESSION['imageP4'].'">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="page4">
                        <img id="left2" src="'.$_SESSION['image3'].'"/>
                        <div id="middle">
                            <p>'.$_POST['texte3'].'</p>
                        </div>
                        <div id="right2">
				            <div id="vide"></div>
				            <a href="#page1">
					           <img id="logoFooter" src="remonter.png"/>
				            </a>
			             </div>
                    </div>
                </section>
            </body>
        </html>';
        }
        
        public function style1(){
            return '
                    *{
                        margin: 0;
                        padding: 0;
                        text-decoration: none;
                    }
                    
                    section {
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        color: white;
                    }
                    
                    /*******************************************/
                    
                    #page1 {
                        width: 100%;
                        height: 100%;
                    }
                    
                    #texte1 {
                        position: absolute;
                        top: 0;
                        width: 100%;
                        height: 50%;
                        background-color:'.$_SESSION['coul1'].';
                        text-align: center;
                    }
                    
                    h1 {
                        margin-top: 2%;
                    }
                    
                    #img0 {
                        width: 9vw;
                        height: 9vw;
                        margin-top: 5%;
                    }
                    
                    #page1Img {
                        position: absolute;
                        top: 50%;
                        width: 100%;
                        height: 50%;
                        display: inline-block;
                    }
                    
                    /*******************************************/
                    
                    #page2 {
                        width: 100%;
                        height: 100%;
                        background-color: '.$_SESSION['coul1'].'; /* première couleur de la palette */
                    }
                    
                    #texte2 {
                        width: 100%;
                        height: 50%;
                        text-align: center;
                        color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                        font-size: 25px;
                        font-family: verdana;
                        display: inline-block;
                    }
                    
                    #texte2 p {
                        width: 100%;
                        height: 60%;
                        margin-top: 5%;
                    }
                    
                    #imgPage2 {
                        width: 100%;
                        height: 50%;
                        text-align: center;
                    }
                    
                    #page2Image {
                        width: 40%;
                        height: 100%;
                    }
                    
                    /*******************************************/
                    
                    #page3 {
                        width: 100%;
                        height: 100%;
                        background-color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                        display: inline-block;
                    }
                    
                    #bloc3 {
                        width: 80%;
                        height: 90%;
                        background-color: '.$_SESSION['coul3'].';/* troisième couleur de la palette */
                        margin-top: 2.5%;
                        margin-bottom: 2.5%;
                        margin-left: 10%;
                        margin-right: 10%;
                        display: inline-block;
                    }
                    
                    #bloc3left {
                        display: inline-block;
                        width: 49.5%;
                        height: 100%;
                    }
                    
                    #img3Lleft {
                        width: 48%;
                        height: 100%;
                        display: inline-block;
                        margin-right: 3%;
                    }
                    
                    #img3Lright {
                        width: 48%;
                        height: 100%;
                        display: inline-block;
                    }
                    
                    #bloc3right {
                        width: 49.5%;
                        height: 100%;
                        float: right;
                    }
                    
                    #img3Rleft {
                        width: 100%;
                        height: 48%;
                        display: inline-block;
                        margin-bottom: 4%;
                    }
                    
                    #img3Rright {
                        width: 100%;
                        height: 48%;
                        display: inline-block;
                    }
                    
                    /*******************************************/
                    
                    #page4 {
                        width: 100%;
                        height: 100%;
                        background-color: '.$_SESSION['coul3'].';/* troisième couleur de la palette */
                    }
                    
                    #corps4 {
                        width: 100%;
                        height: 90%;
                    }
                    
                    #left4 {
                        width: 40%;
                        height: 90%;
                        display: inline-block;
                        position: absolute;
                        text-align: center;
                    }
                    
                    #img4 {
                        width: 20vw;
                        height: 20vw;
                        display: inline-block;
                        margin-top: 25%;
                    }
                    
                    #right4 {
                        width: 59%;
                        height: 100%;
                        float: right;
                        text-align: center;
                    }
                    
                    #right4 h1 {
                        margin-top: 15%;
                        margin-bottom: 5%;
                        font-size: 40px;
                    	font-family: verdana;
                    }
                    
                    #right4 p {
                        margin-top: 15%;
                        font-size: 30px;
                    	font-family: verdana;
                    }
                    
                    .p4img {
                        width: 3vw;
                        height: 3vw;
                        display: inline-block;
                        margin-right: 5%;
                        margin-top: 15%;
                    }
                    
                    #footer4 {
                        width: 100%;
                        height: 10%;
                        background-color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                        text-align: center;
                    }
                    
                    #footer4 p {
                        color: '.$_SESSION['coul3'].';/* troisième couleur de la palette */
                        font-size: 25px;
                        font-family: verdana;
                    }';
        }
        
        public function style2(){
            return '
                    *{
                        margin: 0;
                        padding: 0;
                        text-decoration: none;
                    }
                    
                    header {
                        width: 100%;
                        height: 6%;
                        background-color: '.$_SESSION['coul2'].'; /*première couleur de la palette*/
                        position: fixed;
                        top: 0;
                        right: 0;
                        display: inline-block;
                        z-index: 1;
                    }
                    
                    header p {
                        display: inline-block;
                        color:'.$_SESSION['coul4'].'; /*dernière couleur de la palette */
                        font-size: 30px;
                        font-family: verdana;
                        margin-left: 5%;
                    }
                    
                    header img {
                        width: 2.5vw;
                        height: 2.5vw;
                        float: right;
                    }
                    
                    section {
                        width: 100%;
                        height: 94%;
                        position: absolute;
                        top: 6%;
                        background-color: '.$_SESSION['coul1'].'; /*deuxième couleur de la palette */
                        display: inline-block;
                        z-index: 0;
                    }
                    
                    .page {
                        width: 100%;
                        height: 100%;
                    }
                    
                    #texte1 {
                        width: 100%;
                        height: 28%;
                        vertical-align: middle;
                    }
                    
                    #bottom1 {
                        width: 100%;
                        height: 72%;
                    }
                    
                    #img1 {
                        width: 60%;
                        height: 50%;
                        margin-left: 20%;
                        margin-top: 5%;
                    }
                    
                    #p1h1 {
                        text-align: center;
                        color:'.$_SESSION['coul4'].'; /*dernière couleur de la palette */
                        font-size: 5vw;
                        font-family: verdana;
                    }
                    
                    #imgP2 {
                        width: 30%;
                        height: 100%;
                        display: inline-block;
                    }
                    
                    #rightP2 {
                        width: 69%;
                        height: 100%;
                        float: right;
                        text-align: center;
                        font-size: 30px;
                        background-color: '.$_SESSION['coul3'].'; /*troisième couleur de la palette */
                        font-family: Verdana, Geneva, Tahoma, sans-serif;
                    }
                    
                    #rightP2 p {
                        margin-top: 20%;
                    }
                    
                    .p2img {
                        width: 3vw;
                        height: 3vw;
                        display: inline-block;
                        margin-right: 5%;
                        margin-top: 15%;
                    }
                    
                    #p3 {
                        background-color: '.$_SESSION['coul1'].'; /*première couleur de la palette */
                    }
                    
                    #left3 {
                        width: 49.5%;
                        height: 100%;
                        display: inline-block;
                    }
                    
                    #right3 {
                        width: 49.5%;
                        height: 100%;
                        float: right;
                    }
                    
                    #left3 img {
                        width: 90%;
                        height: 30%;
                        margin: 10% 5% 10% 5%;
                    }
                    
                    #right3 img {
                        width: 90%;
                        height: 30%;
                        margin: 10% 5% 10% 5%;
                    }
                    
                    #corps4 {
                        width: 100%;
                        height: 92%;
                        background-color: '.$_SESSION['coul3'].'; /*troisième couleur de la palette */
                    }
                    
                    #top4 {
                        width: 100%;
                        height: 50%;
                    }
                    
                    #img4 {
                        width: 60%;
                        height: 100%;
                        margin-left: 20%;
                    }
                    
                    #bottom4 {
                        width: 100%;
                        height: 50%;
                        text-align: center;
                        color: '.$_SESSION['coul2'].'; /* deuxième couleur de la palette */
                        font-size: 30px;
                        font-family: verdana;
                    }
                    
                    #footer {
                        width: 100%;
                        height: 8%;
                        text-align: center;
                        background-color: '.$_SESSION['coul2'].'; /* deuxième couleur de la palette */
                        color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                        font-size: 30px;
                        font-family: verdana;
                    }';
        }
        
        public function style3(){
            return '
                    *{
                      margin: 0;
                      padding: 0;
                      text-decoration: none;
                    }
                    
                    header {
                    	position: fixed;
                    	top: 0;
                    	left: 0;
                    	width: 4%;
                    	height: 100%;
                    	background-color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                    	display: inline-block;
                    }
                    
                    header img {
                    	width: 4vw;
                    	height: 4vw;
                    	display: inline-block;
                    }
                    
                    header ul {
                    	width: 100%;
                    	height: 100%;
                    }
                    
                    #listReseaux {
                    	position: absolute;
                    	bottom: 0;
                    	left: 0;
                    }
                    
                    section {
                    	position: absolute;
                    	left: 4%;
                    	float: right;
                    	width: 96%;
                    	height: 100%;
                    }
                    
                    /*******************************************/
                    
                    #page1 {
                    	width: 100%;
                    	height: 100%;
                    }
                    
                    #left1 {
                    	width: 60%;
                    	height: 100%;
                    	display: inline-block;
                    	background-color: '.$_SESSION['coul1'].'; /* première couleur de la palette */
                    }
                    
                    #titre p {
                    	text-align: right;
                    	margin-top: 15%;
                    	margin-right: 5%;
                    	color: '.$_SESSION['coul3'].'; /* troisième couleur de la palette */
                    	font-size: 40px;
                    	font-family: verdana;
                    }
                    
                    #texte1 p {
                    	text-align: right;
                    	margin-top: 20%;
                    	margin-right: 5%;
                    	color: '.$_SESSION['coul3'].'; /* troisième couleur de la palette */
                    	font-size: 40px;
                    	font-family: verdana;
                    }
                    
                    #right1 {
                    	width: 40%;
                    	height: 100%;
                    	display: inline-block;
                    	position: absolute;
                    }
                    
                    /*******************************************/
                    
                    #page2 {
                    	width: 100%;
                    	height: 100%;
                    }
                    
                    #top1 {
                    	display: inline-block;
                    	width: 100%;
                    	height: 50%;
                    }
                    
                    #texte2 {
                    	width: 50%;
                    	height: 100%;
                    	float: right;
                    	margin-top: 3%;
                    	color: '.$_SESSION['coul3'].'; /* troisième couleur de la palette */
                    	font-size: 25px;
                    	font-family: verdana;
                    }
                    
                    #bottom1 {
                    	display: inline-block;
                    	width: 100%;
                    	height: 50%;
                    }
                    
                    /*******************************************/
                    
                    #page3 {
                    	width: 100%;
                    	height: 100%;
                    	background-color: '.$_SESSION['coul3'].'; /*troisième couleur de la palette*/
                    }
                    
                    #proj1 {
                    	width: 25%;
                    	height: 100%;
                    	display: inline-block;
                    }
                    
                    #othersProjs {
                    	width: 74%;
                    	height: 97%;
                    	margin-top: 2%;
                    	display: inline-block;
                    }
                    
                    #projet1 {
                    	width: 90%;
                    	height: 92%;
                    	margin-left: 5%;
                    	display: inline-block;
                    }
                    
                    #topProjs {
                    	display: inline-block;
                    	width: 100%;
                    	height: 50%;
                    }
                    
                    #projet2 {
                    	display: inline-block;
                    	width: 45%;
                    	height: 90%;
                    	margin-right: 9.5%;
                    }
                    
                    #projet3 {
                    	display: inline-block;
                    	width: 45%;
                    	height: 90%;
                    }
                    
                    #bottomProjs {
                    	display: inline-block;
                    	width: 100%;
                    	height: 50%;
                    }
                    
                    #projet4 {
                    	display: inline-block;
                    	width: 100%;
                    	height: 90%;
                    }
                    
                    /*******************************************/
                    
                    #page4 {
                    	width: 100%;
                    	height: 100%;
                    }
                    
                    #left2 {
                    	width: 30%;
                    	height: 100%;
                    	display: inline-block;
                    }
                    
                    #middle {
                    	width: 63%;
                    	height: 100%;
                    	display: inline-block;
                        text-align : center;
                    }
                    
                    #middle p {
                        font-size: 25px;
                        font-family: verdana;
                        display: inline-block;
                    }
                    
                    #right2 {
                    	width: 5.5%;
                    	height: 100%;
                    	float: right;
                    	background-color: '.$_SESSION['coul4'].'; /* dernière couleur de la palette */
                    }
                    
                    #vide {
                    	width: 100%;
                    	height: 85%;
                    	display: inline-block;
                    }
                    
                    #logoFooter {
                    	width: 5vw;
                    	height: 5vw;
                    	display: inline-block;
                    }';
        }
        
        /*
         * Creer un dossier pour mettre tout dedans
         */
        public function Dossier(){
            $name = $_SESSION['token'];
            if(file_exists('Dossiers/'.$name)){
                while(file_exists('Dossiers/'.$name)){
                    $name= random_int(1, 1999).$name;
                }
            }
            mkdir('Dossiers/'.$name, 0777, true);
            $_SESSION['dossier']=$name;
        }
        
        /*
         * Prend en parametre un nom de fichier qui va être téléchargé, (ici le nom d'un field puisque plusieurs fields doivent être passés en meme temps) et fait en sorte de le renommé avec un token stocké dans la session, peut modifier le nom de fichier si celui ci existe déja afin de forcer le téléchargement.
         */
    	public function upload($nom){
        	if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Vérifie si le fichier a été uploadé sans erreur.
                if(isset($_FILES[$nom]) && $_FILES[$nom]["error"] == 0){
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                    $filename = $_FILES[$nom]["name"];
                    $filetype = $_FILES[$nom]["type"];
                    $filesize = $_FILES[$nom]["size"];
            
                    // Vérifie l'extension du fichier
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
            
                    
                    // Vérifie le type MIME du fichier
                    if(in_array($filetype, $allowed)){
                        //le nouveau nom du fichier
                        $name.=$_SESSION['token'];
                        $name.= $_FILES[$nom]['name'];
                        $name = str_replace(' ', '', $name);
                        //vérifie si il y a un doublon 
                        if(file_exists("Dossiers/".$_SESSION['dossier']."/" . $name)){
                            while(file_exists("Dossiers/".$_SESSION['dossier']."/" . $name)){
                                //modifie le nom du fichier temps qu'il existe déja dans l'ensemble de fichiers uploadés
                                $name= random_int(1, 1999).$name;
                            }
                        }
                        $_SESSION[$nom]=$name;
                        move_uploaded_file($_FILES[$nom]["tmp_name"], "Dossiers/".$_SESSION['dossier']."/" . $name);
                        echo "Votre fichier a été téléchargé avec succès.";
                    } else{
                        echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    }
                } else{
                    echo "Error: ".$_FILES[$nom]["error"];
                }
            }
        }
	}
?>