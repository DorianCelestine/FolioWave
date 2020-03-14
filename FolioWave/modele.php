<?php
	class Modele{
		function __construct(){
		}
		function sendMail(){
            $mail= $_POST['mail'];
            $sujet = $_POST['sujet'];
            $message =  $_POST['message'];
            $a = "foliowave.enterprise@gmail.com";
            $entete = "From:" . $mail;
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            mail($a,$sujet,$message, $entete);
            return true;
        }
	}
?>