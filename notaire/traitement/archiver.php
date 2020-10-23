<meta charset="utf-8">

<?php 
session_start();


include("../base_donnee/fonctions.php");

$article= htmlentities(trim($_GET['article']));
$etat="2";

                             
              // ******************************                     

if ($etat!=''  and $article!='' ) 
{

    publication($etat,$article);
                    echo "<script type='text/javascript'>alert('Felicitation article archivé avec succès !!!');
                    window.location='../brouillon_super_admin.php';
                    </script>";
        }

        else {

                echo "<script type='text/javascript'>alert('Attention !!! Veuillez remplir les champs');
                            window.location='../brouillon_super_admin.php';
                            </script>";

            }
 
         

 ?>