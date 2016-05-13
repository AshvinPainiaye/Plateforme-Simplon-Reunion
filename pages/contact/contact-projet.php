<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Plateforme-apprenants</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="../../app/public/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">

    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">

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
                <a href="../../index.html" class="navbar-brand">
                    <img src="../../images/logo.png" alt="" class="img-responsive" width="140px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../../index.html"><i class="fa fa-home"></i> ACCUEIL</a></li>
                    <li><a href="../../pages/apropos.html"><i class="fa fa-book"></i> A PROPOS</a></li>
                    <li><a href="../../pages/formation.html"><i class="fa fa-graduation-cap"></i> FORMATION</a></li>
                    <li><a href="../../pages/apprenant.html"><i class="fa fa-users"></i> LES APPRENANTS</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;"><i class="fa fa-envelope"></i> CONTACT <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="contact-projet.php" style="color: #222222;">SOUMETTRE UN PROJET</a></li>
                            <li><a href="contact-apprenant.php">RECRUTER UN APPRENANT</a></li>
                            <li><a href="contact-animer.php">ANIMER UNE MASTER-CLASS</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="contact-candidater.php">CANDIDATER</a></li>
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
                <h2>SOUMETTRE UN PROJET</h2>
                <img src="../../images/Sans%20titre%20-%201.png" alt="" class="img-responsive img-top center-block">
            </div>
        </div>
    </div>

    <!-- debut description formulaire -->
    <section class="descriptionFormulaire fond">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="color:black;">En réalisant des projets pour les acteurs économiques, les apprenants mettent à l’oeuvre leurs compétences acquises en formation à votre service. Cela vous permet d’avoir un nouvel éclairage sur vos projets. Nos développeurs acrobates peuvent ainsi s'inscrire durablement dans l’écosystème réunionnais. Et cela vous permet également de créer un vivier de talents pour des recrutements futurs, ou de découvrir les talents de vos prochains contrats de professionnalisation.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin description formulaire -->

    <!-- debut Contact -->
    <section class="formulaire fond">
        <div class="container">
            <div class="row">
                <form method="post" action="" role="form" name="formulaire" data-toggle="validator" id="myform">

                    <div class="col-md-6">

                        <div class="form-group has-feedback">
                            <label for="nom" class="control-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="prenom" class="control-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="email" name="email" class="control-label">Adresse Email</label>
                            <input type="email" class="form-control" id="email" name="email" pattern="^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="example@example.com" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="entreprise" class="control-label">Société / Entreprise</label>
                            <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entrer le nom de votre société / entreprise" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="telephone" class="control-label">Numéro de téléphone</label>
                            <input type="tel" class="form-control bfh-tel" id="telephone" name="telephone" pattern="^(0262|0692|0693)\d{6}$" placeholder="XXXX XX XX XX" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group has-feedback">
                            <label for="sujet" class="control-label">Sujet</label>
                            <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Entrer votre sujet" maxlength="60" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control" name="message" rows="10" placeholder="Entrer votre message" style="height:256px;" required></textarea>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-offset-8 col-sm-4 text-right">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-default" style="width:100%; height:60px;">ENVOYER</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>

            <div class="row contact">
                <div class="col-md-4">
                    <div>
                        <h3>SIMPLON-REUNION</h3>

                        <ul class="list-unstyled text-left">
                            <li>
                                <h4>Adresse :</h4>
                                <p>Espace culturel et éducatif Pierre Roselli,
                                    <br>Rue des Longains,97440 St André</p>
                            </li>
                            <li>
                                <h4>Email :</h4>
                                <p>
                                    nludovic@simplon.co
                                </p>
                            </li>
                            <li>
                                <h4>Numéro de Téléphone :</h4>
                                <p></p>+ 262 XXX XXX | + 692 XXX XXX</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.414955590089!2d55.65536505012309!3d-20.975997177031196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21787d582ee3f92b%3A0x97e959a661b3f3de!2sEspace+culturel+et+%C3%A9ducatif+Pierre+Roselli!5e0!3m2!1sfr!2sfr!4v1462862396657" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>

        </div>
    </section>
    <!-- fin Contact -->


    <!-- remonter au top -->
    <a href="body"><i class="fa fa-chevron-up"></i></a>


    <!-- debut footer -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <img src="../../images/Sans-titre-6.png" alt="" class="img-responsive center-block">
            </div>
        </div>
    </div>
    <footer class="espace-bloc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Copyright <a href="https://github.com/AshvinPainiaye" target="_blank">Ashvin PAINIAYE</a> | <a href="https://github.com/Sweezy974" target="_blank">Frederic BOYER</a> | <a href="https://github.com/CroOn974" target="_blank">Guillaume VACARME</a> | <a href="https://github.com/Grenouille974" target="_blank">Lola CADENA</a> | <a href="https://github.com/petula" target="_blank">Petula PUELLE</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- fin footer -->

    <!-- PhP -->
    <?php if (isset($_POST['submit']))
{
  $msg_ok = "Votre demande a bien été prise en compte.";

  define('MAIL_DESTINATAIRE','simploners974@gmail.com');
  define('MAIL_SUJET','Message du formulaire ');

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
  $mail_corps .= $message;

  if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
    //Le mail est bien expédié
    echo $msg_ok;
  } else {
    //Le mail n'a pas été expédié
    echo "Une erreur est survenue lors de l'envoi du formulaire par email";
  }

}

?>

        <!--Fin Php -->



        <script src="../../app/public/libs/jquery/dist/jquery.min.js"></script>
        <script src="../../app/public/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../app/public/libs/jquery/dist/validator.js"></script>
        <script src="../../js/main.js"></script>

</body>

</html>