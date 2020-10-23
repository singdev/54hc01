<?php
session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Notarium</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="description" content="Notre site web Notarium, aide les notaires qui veulent accroitre leur valeur ajoutée en atteignant un large public et en modernisant leurs services à offrir aux entreprises et aux particuliers des services en ligne.">
    <meta name="author" content="Daddy 2lb, Gabriella, Sady, Sabrina et l'equipe Notarium">



    <!-- Site Icons -->
    <link rel="icon" type="images/png" href="../images/logo Notarium Modifier 2.png" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css" />

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<?php include '../includes_news_user/header.php'; ?>
    
  
    <!-- contact_form -->
    <div class="section dossier_succession_bila_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full_bilan">
                                <div class="bilan">
                                    <p>Votre demande a été enregistrée avec succès.</p>
                                    <div class="Newsutilisateur">
                                    Nom du dossier : <?php echo'<font color="#042b4a"'."font size=''>". $_SESSION['prenom']."</font>"; ?> <?php echo'<font color="#042b4a"'."font size=''>". $_SESSION['nom']."</font>"; ?>
                                    </div>    
                                </div>

                                <p>Téléphon : <?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['phone']."</font>"; ?></p>
                                <p>Emaile : <?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['email']."</font>"; ?></p>

                                <div align="center" class="bordure">
                                En cours de création...    
                                </div>
                                                              
                                <div class="">
                                    <div class="dossier_bilan2">
                                    <p> </p>
                                    </div>
                                    <div class="nb">NB: L'office notariale prendra rendez-vous avec vous dans les minutes qui suivent(24heurs)
                                    </div>
                                    <div class="">
                                        <img width="20%" height="20%" src="../images/mains.png">
                                    </div>
                                </div>
                                <div class="retour"> <a href="../deconnection.php">Déconnection</a>                           
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
   
    <?php include '../includes_news_user/footer.php'; ?>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
    <script src="../js/slider-index.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
	
</body>

</html>