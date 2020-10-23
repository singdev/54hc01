<?php 
session_start();

include("../base_donnee/fonctions.php");

$intitule_video= htmlentities(trim($_POST['intitule_video']));

$lien_video= htmlentities(trim($_POST['lien_video']));

$article= htmlentities(trim($_POST['article']));

$etat="0";
         
         $verification=verification_video(substr($lien_video, -11),$article);
         if (empty($verification)) {
              ajout_video($intitule_video,substr($lien_video, -11),$etat,$article);
                   
              echo "<script type='text/javascript'>alert('Felicitation video enregistrée avec succès !!');
                         window.location='../supports.php?article=$article';
                    </script>";
         }
         else
         {
             echo "<script type='text/javascript'>alert('cette vidéo existe déja !!!');
                         window.location='../supports.php?article=$article';
                    </script>";
         }
         

 ?>