<meta charset="utf-8">

<?php 
session_start();


include("../base_donnee/fonctions.php");

$id_demande= $_GET['demande'];

              

  $demande= demande($id_demande);
                                            if (!empty($demande)) {
                                                
                                                foreach ($demande as $key => $value) {
                                                    $demande=$value;
                                                     

                         $login=$demande['email_adresse'];
$mot_de_passe=$demande['mot_de_passe'];
$nom_et_prenom=$demande['nom_prenom'];
$profil=$demande['profil'];
$pays=$demande['Pays'];
$email_adresse=$demande['email_adresse'];
$etat_demande=1;
          


 $verification=verification_point_focal($login);
         if (empty($verification)) {
             ajout_administrateur($login,$mot_de_passe,$nom_et_prenom,$profil,$pays);
             modifier_demande_etat($etat_demande,$email_adresse);
                    echo "<script type='text/javascript'>alert('Felicitation compte validé !!!');
                    window.location='../liste_demande_super.php';
                    </script>";
         }
         else
         {
             echo "<script type='text/javascript'>alert('Désolé, il a déjà un compte !!!');
                         window.location='../liste_demande_super.php';
                    </script>";
         }






                                            }}

                                          

                
         

 ?>