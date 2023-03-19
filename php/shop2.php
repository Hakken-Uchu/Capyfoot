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
$sqlQuery = "SELECT * FROM `Emote` WHERE type = 'sympa'";
$EmoteStatement = $mysqlConnection->prepare($sqlQuery);
$EmoteStatement->execute();
$Emote = $EmoteStatement->fetchAll();


