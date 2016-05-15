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
                    <img src="images/logo.png" alt="" class="img-responsive" width="140px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php" style="color: #222222;"><i class="fa fa-home"></i> ACCUEIL</a></li>
                    <li><a href="apropos.php"><i class="fa fa-book"></i> A PROPOS</a></li>
                    <li><a href="formation.php"><i class="fa fa-graduation-cap"></i> FORMATION</a></li>
                    <li><a href="apprenant.php"><i class="fa fa-users"></i> LES APPRENANTS</a></li>
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



    <!-- debut carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/carousel/1.jpg" alt="" class="img-responsive">
            </div>

            <div class="item">
                <img src="images/carousel/2.jpg" alt="" class="img-responsive">
            </div>

            <div class="item">
                <img src="images/carousel/3.jpg" alt="" class="img-responsive">
            </div>

            <div class="item">
                <img src="images/carousel/1.jpg" alt="" class="img-responsive">
            </div>

            <div class="item">
                <img src="images/carousel/5.jpg" alt="" class="img-responsive">
            </div>
        </div>

    </div>
    <!-- fin carousel -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Bienvenue sur Simplon Réunion</h1></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <img src="images/Sans%20titre%20-%201.png" alt="" class="img-responsive img-top1 center-block">
            </div>
        </div>
    </div>

    <!--description simplon reunion-->
    <section class="fond">
        <div class="container descriptionAccueil">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 text-center">
                    <h3><i class="fa fa-book"></i> A PROPOS</h3>
                    <p><strong>Simplon Réunion</strong> est présente sur l'ile depuis le début de l'année 2016 et fait partie du plus grand réseau de fabriques labellisées <strong>"Grande école du numérique"</strong>.
                        <br /> Les formations proposées sont <strong>gratuites et intensives</strong>. Notre but : Former nos apprenants à <strong>la création de sites web, d'applications mobiles</strong> et en faire des professionnels. Nos apprenants sont pour l 'essentiel issus de milieux très peu présents dans les métiers techniques du numérique: personnes jeunes peu ou pas diplômées, demandeurs d 'emploi, allocataires de minima sociaux, séniors en reconversion, femmes et personnes porteuses de handicap.
                        <br/><strong>Notre école est ouverte à tous. Seule votre motivation nous importe !</strong>
                    </p>
                    <a class="btn btn-default" href="pages/apropos.php" role="button">EN SAVOIR PLUS <i class="fa fa-plus-circle"></i></a>

                    <hr>

                    <h3><i class="fa fa-graduation-cap"></i> FORMATION</h3>
                    <p>
                        Développeur.se web créer en <strong>autonomie</strong> des sites web et des applications web/mobile. Maîtriser certaines méthodes : agile, Test Driven Development, pair programming… Se servir d’outils tels que: Git, Github, etc... <strong>Formation qualifiante / 6 mois</strong>.
                    </p>
                    <a class="btn btn-default" href="pages/formation.php" role="button">EN SAVOIR PLUS <i class="fa fa-plus-circle"></i></a>

                    <hr>

                    <h3><i class="fa fa-thumbs-up"></i> L'EQUIPE</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/farid.jpg" alt="" class="img-responsive center-block">
                            <h4>Farid HUMBLOT</h4>
                            <h5>Directeur Simplon Réunion</h5>
                            <div class="social">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/nicolas.jpg" alt="" class="img-responsive center-block">
                            <h4>Nicolas LUDOVIC</h4>
                            <h5>Lead Formateur</h5>
                            <div class="social">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="btn btn-default github"><i class="fa fa-github fa-fw"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn btn-default linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <img src="images/Sans%20titre%20-%202.png" alt="" class="img-responsive center-block">
            </div>
        </div>
    </div>
    <!--fin description simplon reunion-->
    <section class="devise espace-bloc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>"IN CODE WE TRUST"</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a class="twitter-timeline" href="https://twitter.com/Simplon_Reunion" data-widget-id="730984598683975680">Tweets de @Simplon_Reunion</a>
                    <script>
                        ! function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");
                    </script>
                </div>

                <div class="col-md-6 text-center">
                    <div class="fb-page visible-xs" data-href="https://www.facebook.com/simplonreunion" data-tabs="timeline" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/simplonreunion"><a href="https://www.facebook.com/simplonreunion">Fil d'actualité Facebook de Simplon Réunion</a></blockquote>
                        </div>
                    </div>

                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsimplonreunion&tabs=timeline%2Cmessages&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </section>




    <!--début partenaires-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <h2 class="h2">NOS PARTENAIRES</h2>
                <img src="images/Sans%20titre%20-%203.png" alt="" class="img-responsive center-block">
            </div>
        </div>
    </div>

    <section class="logo fond">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo4" src="images/partenaire/GEN.jpg" alt="logo GEN" />
                </div>

                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo5" src="images/partenaire/france sengage.png" alt="france sengage" />
                </div>

                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo3" src="images/partenaire/ue.png" alt="logo eu " />
                </div>

                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo8" src="images/partenaire/Logo-opcalia.jpg" alt="logo eu " />
                </div>


            </div>

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo9" src="images/partenaire/logo-region-reunion.jpg" alt="logo engage" />
                </div>
                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo1" src="images/partenaire/engage.png" alt="logo engage" />
                </div>

                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo2" src="images/partenaire/eu sengage.png" alt="logo eu sengage" />
                </div>

                <div class="col-md-3">
                    <img class="img-responsive center-block" id="logo7" src="images/partenaire/marianne.png" alt="marianne" />
                </div>
            </div>
        </div>
    </section>
    <!-- fin partenaires-->


    <?php include("php/footer.php"); ?>

        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script src="app/public/libs/jquery/dist/jquery.min.js"></script>
        <script src="app/public/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>