<?php session_start();
if (!isset($_SESSION['name'])) {
    $message_expire = "Votre session a expiré veuillez vous reconnecté";
    echo "<script type='text/javascript'>alert('$message_expire');
    document.location.href = '/login.php';
    </script>";

}
?>
<!DOCTYPE html>
<html lang="fr">

<head>


    <style>
    #capybara {

        top: 190px;
        left: 900px;
        height: 150px;
        width: 160px;

    }

    #titre {

        top: 280px;
        left: 950px;
        height: 150px;
        width: 150px;

    }

    #nomUtilisateur {
        left: 950px;
        top: 210px;

    }
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>capyfoot/index</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" href="/images/logofoot.png" sizes="48px,48px">
</head>

<body id="page-top" background="fontquiz.avif">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-warning logo navbar-brand h1" id="logo" href="">
                CapyfooT
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#fonctionnalites">Fonctionnalités</a></li>
                    <li class="nav-item"><a class="nav-link" href="shoppays.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#matchs">Matchs</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#modal_confirmation_deconnection" href="">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Capyfoot</div>
            <div class="masthead-heading text-uppercase">Amuse toi !</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#fonctionnalites">Que faire ?</a>
        </div>
    </header>

    <section class="page-section" id="fonctionnalites">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Fonctionnalités</h2>
                <h3 class="section-subheading text-muted">Que propose notre site ?</h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 p-5">
                    <div class="card card text-dark bg-white" style="width: 18rem;">
                        <img class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"> <a href="#"><img src="images/capyabra (8).png"
                                        class="rounded-circle img-fluid border"></a>
                            <h2 class="h5 text-center mt-3 mb-3">Le shop pour dépenser tes CapyCoin</h2>
                            <p class="text-center"><a href="shoppays.php" class="btn btn-warning">Shop</a>
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-5">
                    <div class="card card text-dark bg-white" style="width: 18rem;">
                        <img class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"> <a href="#"><img src="images/capyabra (18).png"
                                        class="rounded-circle img-fluid border"></a>
                            <h2 class="h5 text-center mt-3 mb-3">Regarde ton profil et tes statistiques</h2>
                            <p class="text-center"><a href="#profil" class="btn btn-warning">Carrière</a>
                            </p>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-5">
                    <div class="card card text-dark bg-white" style="width: 18rem;">
                        <img class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"> <img src="images/capyabra (9).png"
                                    class="rounded-circle img-fluid border"></a>
                            <h5 class="text-center mt-3 mb-3">Tous tes matchs en temps réel</h5>
                            <p class="text-center "><a href="#match" class="btn btn-warning">Tes matchs</a></p>
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="page-section bg-dark text-white" id="profil">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">Ton profil</h2>
            <h3 class="section-subheading text-muted">Regarde toi, comment tu est beau !</h3>
            <select aria-label="Default select example " id="pays">
                <option id="base" value="vide" selected>PP</option>
                <option id="fr" value="fr">Français</option>
                <option id="es" value="es">Espagnol</option>
                <option id="en" value="en">Anglais</option>
                <option id="ja" value="ja">Japonais</option>
                <option id="po" value="po">Portugal</option>
                <option id="su" value="su">Suisse</option>
                <option id="ru" value="ru">Russe</option>
                <option id="mu" value="us">Américain</option>
                <option id="ge" value="br">Brésilien</option>
            </select>
        </div>
        <div class="col-sm-12">
            <img class="rounded-circle rounded mx-auto d-block m-3 PP2 w-25" id="capybaraProfile"
                src="images/capyppbase.png">
        </div>
        <h1 class="text-center">

            <?php
echo $_SESSION['name']
?>

        </h1>
        <h2 class="section-subheading text-center">
            <?php
echo $_SESSION['victoire'] . "V" . " - "
?> <?php
echo $_SESSION['defaite'] . "D"
?>
        </h2>

    </section>

    <section class="bg-light form-control" id="matchs">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 mb-xl-5" id="match">Match en temps réel</h1>
                </div>
            </div>
            <div class="row pt-5 mb-xl-5 ">
                <div class="col-sm">
                    <h2>
                        <?php
echo $_SESSION['name']
?></h2>
                    <?php
echo $_SESSION['victoire'] . "V" . " - "
?> <?php
echo $_SESSION['defaite'] . "D"
?>
                    <img class="rounded-circle rounded mx-auto d-block PP w-50 h-75" src="images/capyppbase.png">
                </div>

                <div class="col-sm">
                    <h1 class="text-uppercase pt-xl-5 text-xl-center">
                        VS
                    </h1>
                </div>
                <div class="col-sm">
                    <h2>Ennemi 1</h2>
                    0V - 0D
                    <img class="rounded-circle rounded mx-auto d-block w-50 h-75" src="images/capyppbase.png">
                </div>
            </div>
            <div class="row mb-xl-5 ">
                <div class="col-sm text-center">
                    <h2>
                        0
                    </h2>
                </div>

                <div class="col-sm">
                    <h1 class="text-uppercase text-xl-center ">
                        -
                    </h1>
                </div>
                <div class="col-sm text-center">
                    <h2>
                        0

                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-heading text-uppercase">Un problème ou une requête ?</h2>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">

                            <input class="form-control" id="name" type="text" placeholder="Votre Nom *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                        </div>
                        <div class="form-group">

                            <input class="form-control mt-2" id="email" type="email"
                                placeholder="Votre adresse E-mail *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Une adresse e-mail est
                                requise.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">L'e-mail n'est pas valide.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">

                            <textarea class="form-control" id="message" placeholder="Votre message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Entre votre requête.</div>
                        </div>
                    </div>
                </div>



        </div>
        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
                type="submit">Envoyer</button></div>
        </form>
        </div>
    </section>


    <!-- Modal -->
    <form action="php/capyfoot.php" method="POST">
        <div class="modal fade" id="modal_confirmation_deconnection" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Etes vous sur de vouloir vous déconnecté ?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="deconnection" value="deconnection"
                            class="btn btn-primary">Oui</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/indexCapyfoot.js"></script>

</body>

</html>