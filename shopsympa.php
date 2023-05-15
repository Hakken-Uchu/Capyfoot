<?php session_start();
if (!isset($_SESSION['name'])) {
    $message_expire = "Votre session a expiré veuillez vous reconnecté";
    echo "<script type='text/javascript'>alert('$message_expire');
    document.location.href = '/login.php';
    </script>";

}
$mysqlConnection = new PDO('mysql:host=localhost;dbname=capyfoot;charset=utf8', 'root', 'lol');
$db = new PDO(
    'mysql:host=localhost;dbname=capyfoot;charset=utf8',
    'root',
    'lol',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
try {

} catch (PDOException $e) {
    die($e->getMessage());
}
/*prends les donnés directement de la base de donnés et affiche le nom est le mail renseigner*/
$sqlQuery = "SELECT * FROM `Emote` WHERE type = 'sympa'";
$EmoteStatement = $mysqlConnection->prepare($sqlQuery);
$EmoteStatement->execute();
$Emote = $EmoteStatement->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>capyfoot/shop.php</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="icon" href="/images/logofoot.png" sizes="48px,48px"  >
    <link href="css/styles.css" rel="stylesheet" />
</head>


<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-warning logo navbar-brand h1" id="logo" href="index.php">
                Capyfoot
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php#fonctionnalites">Fonctionnalités</a></li>
                    <li class="nav-item"><a class="nav-link" href="shoppays.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#matchs">Matchs</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#modal_confirmation_deconnection" href="">Deconnexion</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
<section class="bg-light form-control" id="shop">
        <div class="container py-5">
            <div class="row">


                <div class="col-lg-3">
                    <h1 class="h2 pb-4">Catégories</h1>
                    <ul class="list-unstyled templatemo-accordion">
                        <li class="pb-3">
                            <a id="bouton1"  class="btn btn-outline-secondary" href="shoppays.php">
                                <p class="collapsed d-flex justify-content-between h3 text-decoration text-warning"
                                    >
                                    Page 1 (pays)
                                </p>
                            </a>

                        </li>
                        <li class="pb-3">

                            <button id="bouton2"  class="btn btn-outline-secondary">
                                <p class="collapsed d-flex justify-content-between h3 text-decoration text-warning"
                                    href="">
                                    Page 2
                                </p>
                            </button>

                        </li>
                    </ul>
                    
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col">
                            <ul class="list-inline shop-top-menu pb-3 pt-1">
                                <li class="list-inline-item">
                                    <a class="h3 text-dark text-decoration-none mr-3" href="#">Photo de profil</a>
                                </li>
                        </div>
                                    <div  class="col text-center p-2">
                                        <h5>
                                        <?php
echo $_SESSION['capycoin']
?> CapyCoin
                                        </h5>
                                    </div>
                            </ul>

                    </div>
                    <div class="row">
                    <?php

foreach ($Emote as $element) {
    echo '
                        <div class="col-md-4">
                        <form method="POST" action="php/shop1.php">
                        <div class="card mb-4 product-wap">

                            <div class="card-body">

                                <img class="w-50 h-50 pp1 rounded mx-auto d-block rounded-circle" src="' . $element['chemin'] . '">

                                <p class=" mb-0 text-center ">' . $element['prix'] . ' CC</p>
                                <div class="d-grid gap-2">
                                <button class="btn btn-warning text-dark" type="submit"  name="1">Acheter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
}
?>
                        
                    </div>
                </div>
            </div>
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


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/shopsympaCapyfoot.js"></script>
</body>

</html>
