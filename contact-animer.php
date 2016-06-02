<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<!-- CE SITE A ETE CREE PAR ASHVIN PAINIAYE, FREDERIC BOYER, GUILLAUME VACARME, LOLA CADENA, PETULA PUELLE -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simplon Réunion - Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="app/public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- debut nav -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.png" alt="logo simplon reunion dans la navbar" class="img-responsive" width="140px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home"></i> ACCUEIL</a></li>
                    <li><a href="apropos.php"><i class="fa fa-book"></i> A PROPOS</a></li>
                    <li><a href="formation.php"><i class="fa fa-graduation-cap"></i> FORMATION</a></li>
                    <li><a href="apprenant.php"><i class="fa fa-users"></i> LES APPRENANTS</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;"><i class="fa fa-envelope"></i> CONTACT <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contact-projet.php"><i class="fa fa-suitcase"></i> SOUMETTRE UN PROJET</a></li>
                            <li><a href="contact-apprenant.php"><i class="fa fa-user-plus"></i> RECRUTER UN APPRENANT</a></li>
                            <li class="active"><a href="contact-animer.php" style="color: #222222;"><i class="fa fa-share-alt"></i> ANIMER UNE MASTER-CLASS</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="contact-candidater.php"><i class="fa fa-file"></i> CANDIDATER</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- fin nav -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <h2>ANIMER UNE MASTER-CLASS</h2>
                <img src="images/bande/bande1.png" alt="bande 1" class="img-responsive img-top center-block">
            </div>
        </div>
    </div>

    <!-- debut description formulaire -->
    <section class="descriptionFormulaire fond">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="color:black;" class="text-center">Repérez les talents et favorisez le contact direct avec nos apprenants. Nous vous proposons 10 évènements par session pour les rencontrer à l’occasion des master class Simplon Réunion. Une heure de présentation à partir de 16h au sein de nos locaux à Saint André. Partagez vos expériences et faites connaître vos métiers à nos apprenants pour attirer les meilleurs profils. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin description formulaire -->


    <!-- debut Contact -->
    <section class="formulaire fond">
        <div class="container">
            <!-- PhP -->
            <?php if (isset($_POST['submit']))
      {
        $msg_ok = "Votre demande a bien été prise en compte.";
        $msg_erreur ="Une erreur est survenue lors de l'envoi du formulaire.";
        define('MAIL_DESTINATAIRE','farid@simplon.co , nludovic@simplon.co');
        define('MAIL_SUJET','Message du formulaire : Master-Class ');

        foreach($_POST as $index => $valeur) {
        $$index = stripslashes(trim($valeur));
        }
        //Préparation de l'entête du mail:
        $mail_entete  = "MIME-Version: 1.0\r\n";
        $mail_entete .= "From: {$_POST['nom']} "
                     ."<{$_POST['email']}>\r\n";
        $mail_entete .= 'Reply-To: '.$_POST['email']."\r\n";
        $mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
        $mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
        $mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

        $mail_corps  = "Message de : $prenom $nom\n";
        $mail_corps .= "Entreprise : $entreprise\n";
        $mail_corps .= "Contact : $telephone, $email\n";
        $mail_corps .= " $sujet  \n";
        $mail_corps .= " \n";
        $mail_corps .= $message;

        if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
          //Le mail est bien expédié
          echo '<div class="alert alert-success text-center" role="alert">'.$msg_ok.'</div>';
        } else {
          //Le mail n'a pas été expédié
          echo '<div class="alert alert-danger test-center" role="alert">'.$msg_erreur.'</div>';


        }

      }

      ?>

                <!--Fin Php -->

                <div class="row">
                    <form method="post" action="" role="form" name="formulaire" data-toggle="validator" id="myform">

                        <div class="col-md-6">

                            <div class="form-group has-feedback">
                                <label for="nom" class="control-label">Nom</label> *
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="prenom" class="control-label">Prénom</label> *
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="email" name="email" class="control-label">Adresse Email</label> *
                                <input type="email" class="form-control" id="email" name="email" pattern="^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="example@example.com" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="entreprise" class="control-label">Société / Entreprise</label> *
                                <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entrer le nom de votre société / entreprise" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="telephone" class="control-label">Numéro de téléphone</label> *
                                <input type="tel" class="form-control bfh-tel" id="telephone" name="telephone" pattern="^0(262|692|693|976)([-. ]?[0-9]{2}){3}$" placeholder="XXXX XX XX XX" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group has-feedback">
                                <label for="sujet" class="control-label">Sujet</label> *
                                <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Entrer votre sujet" maxlength="60" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="message" class="control-label">Message</label> *
                                <textarea class="form-control" name="message" rows="10" placeholder="Entrer votre message" style="height:256px;" required></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                        </div>

                        <div class="col-xs-offset-8 col-xs-4 text-right">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-default" style="width:100%; height:60px;">ENVOYER</button>
                                <p style="opacity:0.4; margin-top:10px;">* Champs obligatoires</p>
                            </div>
                        </div>


                    </form>
                </div>


                <?php include("php/coordonnee.php"); ?>


        </div>
    </section>
    <!-- fin Contact -->


    <?php include("php/footer.php"); ?>






        <script src="app/public/libs/jquery/dist/jquery.min.js"></script>
        <script src="app/public/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="app/public/libs/jquery/dist/validator.js"></script>
        <script src="js/main.js"></script>


</body>

</html>