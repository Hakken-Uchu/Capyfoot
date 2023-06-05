<?php session_start();
/*définition des variables*/
$lines = 3;
$counter = 0;

/*lien avec mysql*/
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
$sqlQuery = 'SELECT * FROM `Users`';
$UsersStatement = $mysqlConnection->prepare($sqlQuery);
$UsersStatement->execute();
$Users = $UsersStatement->fetchAll();

/*rentrer dans l'input connection*/
if (isset($_POST['form']) && ($_POST['form']) == "connection") {
    /*vérification des champs de connection*/
    if (isset($_POST['pass1']) && isset($_POST['name1'])) {
        foreach ($Users as $user) {
            if ($user['name'] == $_POST['name1'] && $user['motdepasse'] == $_POST['pass1']) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['motdepasse'] = $user['motdepasse'];
                $_SESSION['victoire'] = $user['victoire'];
                $_SESSION['defaite'] = $user['defaite'];
                $_SESSION['capycoin'] = $user['capycoin'];
                break;
            }
        }
        if ($user['name'] !== $_POST['name1'] || $user['motdepasse'] !== $_POST['pass1']) {
            echo "Les identifiants de connection ne sont pas valides";
            return;
        } else {
            echo "Bon retour a toi" . ' ' . $user['name'] . ' ' . "ton addresse mail renseigné est :" . " " . $user['mail'] . " ";
            header("Location: http://capyfoot.local/index.php");
            exit;
        }
    }

}

/*rentre dans l'input inscription*/
if (isset($_POST['form']) && ($_POST['form']) == "inscription") {
    /*commande pour enregistrer les donnés dans le phpmyadmin*/
    if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['form']) == "inscription") {
        $sqlQuery = 'INSERT INTO Users(name, mail, motdepasse, victoire, defaite, capycoin) VALUES (:name, :mail, :motdepasse, :victoire, :defaite, :capycoin)';
        $insertRecipe = $mysqlConnection->prepare($sqlQuery);
        $insertRecipe->execute([
            'name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'motdepasse' => $_POST['pass'],
            'victoire' => 0,
            'defaite' => 0,
            'capycoin' => 200,
            
        ]);

        echo ("Nous te souhaitenous la bienvenue" . ' ' . $_POST['name'] . ' ' . "amuse toi bien !");
        $_SESSION['name'] =  $_POST['name'];
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['motdepasse'] = $_POST['pass'];
        $_SESSION['victoire'] = 0;
        $_SESSION['defaite'] = 0;
        $_SESSION['capycoin'] = 200;
        header("Location: http://capyfoot.local/index.php");
    }

}


if (isset($_POST['deconnection']) && ($_POST['deconnection']) == "deconnection") {
    session_destroy();
    $message_deconnection = "Vous avez bien été déconnecté";
    echo "<script type='text/javascript'>alert('$message_deconnection');
document.location.href = '/login.php';
</script>";
}

if (isset($_POST['deconnexion']) && ($_POST['deconnexion']) == "deconnexion") {
    session_destroy();
    $message_deconnection = "Vous avez bien été déconnecté";
    echo "<script type='text/javascript'>alert('$message_deconnection');
document.location.href = '/login.php';
</script>";
}

/*lien avec mysql*/
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
/*prends les donnés directement de la base de donnés*/
$sqlQuery = 'SELECT * FROM `Emote`';
$EmoteStatement = $mysqlConnection->prepare($sqlQuery);
$EmoteStatement->execute();
$Emote = $EmoteStatement->fetchAll();


/*
SELECT u.name, e.* FROM userEmote ue LEFT JOIN Users as u ON ue.user_id = u.id LEFT JOIN Emote as e ON ue.emote_id = e.id;
*/

/* futur commande dans le profil phrase personalisés en fonction des victoires et des défaites*/

/*
if($_SESSION['victoire'] < $_SESSION['defaite']){
echo "Eh ben alors on est en bilan négatif... tu fais honte au site";
}
elseif($_SESSION['victoire']  == $_SESSION['defaite']){
echo "Il faut encore que tu fasse tes preuves, courage !!!";
}
elseif ($_SESSION['victoire']  > $_SESSION['defaite'] +10){
echo "Tu fait partit de l'élite tu est incontestablemant le boss";
}
elseif ($$_SESSION['victoire']  > $_SESSION['defaite'] +100){
echo "Comment on peut être aussi fort tu fais maitenant la fierté est l'emblème de Capyfoot.";
}
else{
echo"Tu est en positif GG mais maintenant essaye de faire partit de l'élite.";
}
*/




/*futur commande pour changer ses informations en mysql pour la base de donnés*/
/*
UPDATE Users SET name = :name, mail = :mail, motdepasse = :motdepasse WHERE Users_id = :id
 */

/*exemple de boucle A GARDER*/
/* echo "voici les utilisateurs et leur information: ";
while ($counter < $lines){
echo $users[$counter]["userName"].' '.$users[$counter]["userMail"].' '.$users[$counter]["userVictoire"].'  '.$users[$counter]["userDefaite"].' ';
$counter++;
} */


