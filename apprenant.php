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
    <title>Simplon Réunion - Apprenant</title>
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
                    <li class="active"><a href="apprenant.php" style="color: #222222;"><i class="fa fa-users"></i> LES APPRENANTS</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i> CONTACT <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contact-projet.php"><i class="fa fa-suitcase"></i> SOUMETTRE UN PROJET</a></li>
                            <li><a href="contact-apprenant.php"><i class="fa fa-user-plus"></i> RECRUTER UN APPRENANT</a></li>
                            <li><a href="contact-animer.php"><i class="fa fa-share-alt"></i> ANIMER UNE MASTER-CLASS</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="contact-candidater.php"><i class="fa fa-file"></i> CANDIDATER</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- fin nav -->

    <!-- debut apprenants -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <h2>LES APPRENANTS</h2>
                <img src="images/bande/bande1.png" alt="bande 1" class="img-responsive img-top center-block">
            </div>
        </div>
    </div>
    <section id="apprenants" class="espace-bloc">
        <div class="container">
            <div class="row">

                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/anais.jpg" alt="photo profil de Anais MARIMOUTOU" class="img-circle center-block">
                        <h3 class="NP">Anais MARIMOUTOU</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/Anais02" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/anais-marimoutou-7a0865120" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'marimoutou.anais';
                                b = 'gmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>

                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/ashvin.jpg" alt="photo profil de Ashvin PAINIAYE" class="img-circle center-block">
                        <h3>Ashvin PAÏNIAYE</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/AshvinPainiaye" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/AshvinPainiaye" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ashvinpainiaye" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'contact';
                                b = 'ashvinpainiaye.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                            <div class="tag">
                                <span class="label label-default">CSS</span>
                                <span class="label label-default">HTML</span>
                                <span class="label label-default">Bootstrap</span>
                                <span class="label label-default">JQuery</span>
                                <span class="label label-default">PHP</span>
                                <span class="label label-default">Javascript</span>
                            </div>
                            <ul class="list-inline portfolio">
                                <li><a href="http://ashvinpainiaye.com" target="_blank" class="btn btn-default btn-md">Portfolio</a></li>
                                <li><a href="http://www.ashvinpainiaye.com/CV.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                            </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/benoit.jpg" alt="photo profil de Benoit BOYER" class="img-circle center-block">
                        <h3 class="NP">Benoit BOYER</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/NonaGemini" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/iNonaGemini" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'b.boyer974';
                                b = 'orange.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/david.jpg" alt="photo profil de David ATCHIAMAN" class="img-circle center-block">
                        <h3 class="NP">David ATCHIAMAN</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/davidatc" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/david-atc-aab902b8" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'atc.david';
                                b = 'outlook.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="cv/atchiaman-david.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/elliot.jpg" alt="photo profil de Elliot BOUVIER" class="img-circle center-block">
                        <h3 class="NP">Elliot BOUVIER</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/zneel/" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/elliot_bouvier" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/elliotbouvier" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'elliotbouvier';
                                b = 'yahoo.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="http://elliotbouvier.com" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/faiza.jpg" alt="photo profil de Faïza MOUNIR" class="img-circle center-block">
                        <h3 class="NP">Faïza MOUNIR</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/FaizaM" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'mounir.faiza';
                                b = 'gmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="cv/mounir-faiza.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/frederic.jpg" alt="photo profil de Frederic BOYER" class="img-circle center-block">
                        <h3 class="NP">Frederic BOYER</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/Sweezy974" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/frederic-boyer-3a7b93121" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'frederic-boyer';
                                b = 'live.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="cv/boyer-frederic.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/fredericj.jpg" alt="photo profil de Frederic JOUAN" class="img-circle center-block">
                        <h3 class="NP">Frederic JOUAN</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/JFrederic" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/jouan97440" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'frederic-jouan97440';
                                b = 'outlook.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="cv/jouan-frederic.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/guillaume.jpg" alt="photo profil de Guillaume VACARME" class="img-circle center-block">
                        <h3 class="NP">Guillaume VACARME</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/CroOn974" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/CroOn974" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/guillaume-vacarme-150827121" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'vggui974';
                                b = 'gmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="cv/vacarme-guillaume.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/kevin.jpg" alt="photo profil de Kevin NARSICADOU" class="img-circle center-block">
                        <h3 class="NP">Kevin NARSICADOU</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/keran29" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/kevin_nars" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/kevin-narsicadou-769867120" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'keran29';
                                b = 'hotmail.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="http://kevinnarsicadou.com/" target="_blank" class="btn btn-default btn-md">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/lola.JPG" alt="photo profil de Lola CADENA" class="img-circle center-block">
                        <h3 class="NP">Lola CADENA</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/Grenouille974" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/N1Grenouille" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/lola-cadena-961048118" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'cadena.lola';
                                b = 'gmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/lorenza.jpg" alt="photo profil de Lorenza DAMOUR" class="img-circle center-block">
                        <h3 class="NP">Lorenza DAMOUR</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/LorenzaDamour" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/lorenza-damour-870b92121" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'lorenzadamour';
                                b = 'gmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <p></p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="https://github.com/LorenzaDamour/portfolio" target="_blank" class="btn btn-default btn-md">Portfolio</a></li>
                            <li><a href="cv/damour-lorenza.pdf" target="_blank" class="btn btn-default btn-md">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/ludovic.jpg" alt="photo profil de Ludovic DIEUDONNE" class="img-circle center-block">
                        <h3 class="NP">Ludovic DIEUDONNE</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/Iudo" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Ludovic974" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'ludovic.dieudonne';
                                b = 'hotmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/mathieu.jpg" alt="photo profil de Mathieu JULIE" class="img-circle center-block">
                        <h3 class="NP">Mathieu JULIE</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/Dipsy974" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Dipsy974" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'mathieujulie974';
                                b = 'hotmail.com'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/petula.jpg" alt="photo profil de Petula PUELLE" class="img-circle center-block">
                        <h3 class="NP">Petula PUELLE</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/petula" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'marie.petula';
                                b = 'orange.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


                <article class="col-md-3">
                    <div class="background">
                        <img src="images/apprenants/philippe.jpg" alt="photo profil de Philippe DEVEZEAUD" class="img-circle center-block">
                        <h3 class="NP">Philippe DEVEZEAUD</h3>
                        <div class="social">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://github.com/pdevezeaud" target="_blank" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/zore974" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/philippe-devezeaud-6107402b" target="_blank" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p style="text-align:center;">
                            <script type='text/javascript'>
                                a = 'pdevezeaud';
                                b = 'yahoo.fr'
                                document.write('<A hre' + 'f="mai' + 'lto:' + a + '@' + b + '">');
                                document.write(a + '@' + b + '</a>');
                            </script>
                        </p>
                        <div class="tag">
                            <span class="label label-default">CSS</span>
                            <span class="label label-default">HTML</span>
                            <span class="label label-default">Bootstrap</span>
                            <span class="label label-default">JQuery</span>
                            <span class="label label-default">PHP</span>
                            <span class="label label-default">Javascript</span>
                        </div>
                        <ul class="list-inline portfolio">
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">Portfolio</a></li>
                            <li><a href="#" target="_blank" class="btn btn-default btn-md disabled">CV</a></li>
                        </ul>
                    </div>
                    <a href="contact-apprenant.php" target="_blank" class="btn btn-default contacter" role="button">RECRUTER</a>
                </article>


            </div>
        </div>
    </section>
    <!-- fin apprenants -->


    <?php include("php/footer.php"); ?>


        <script src="app/public/libs/jquery/dist/jquery.min.js"></script>
        <script src="app/public/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>