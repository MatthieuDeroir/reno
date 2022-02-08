<?php

include_once '../../config.php';

$id = filter_input(INPUT_GET, "id");

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete
$requete = $pdo->prepare("select * from articles");
//executer la requete
$requete->execute();
//recuperer le resultat sous forme d'un tableau
$article = $requete->fetchAll();
// création d'un titre de page
$title = $article[$id]['title'];

$requete = $pdo->prepare("update articles set view_count = view_count+1 where id = $id;");


$requete->execute();


include "../main/header.php";

?>

<h1> <?php echo $article[$id]['title'] ?></h1>
<h3> <?php echo $article[$id]['author'].$article[$id]['date'] ?></h3>

<p> <?php echo $article[$id]['text'] ?></p>


<?php
include "../main/footer.php";
?>
