<?php 
session_start();

include("../base_donnee/fonctions.php");

$intitule_photo= htmlentities(trim($_POST['intitule_photo']));

$type_photo= htmlentities(trim($_POST['article']));


if(isset($_FILES['photo']))
{

$photo=$_FILES['photo']['name'];
$file_extensions=strrchr($photo,".");
        $file_tmp_name=$_FILES['photo']['tmp_name'];
        $file_dest="../photo"."/".$photo;
        $extensions_OK = array('.png','.jpg','.gif','.jpeg');
        copy($file_tmp_name,$file_dest);
  }
else {
     $photo="";
     
} 
$etat="0";
         $verification=verification_photo($intitule_photo,$photo,$etat);
         if (empty($verification)) {
              ajout_photo($intitule_photo,$type_photo,$etat,$photo);
                   
              echo "<script type='text/javascript'>alert('Felicitation photo enregistré avec succès !!');
                         window.location='../supports.php?article=$type_photo';
                    </script>";
         }
         else
         {
             echo "<script type='text/javascript'>alert('cette photo existe déja !!!');
                         window.location='../supports.php?article=$type_photo';
                    </script>";
         }
         

 ?>