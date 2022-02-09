<?php

// création d'un titre de page

$id = filter_input(INPUT_GET, "id");

include_once('../../config.php');

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete
$requete = $pdo->prepare("select * from products");
//executer la requete
$requete->execute();
//recuperer le resultat sous forme d'un tableau
$product = $requete->fetchAll();

$title = $product[$id]['titre'];
$bgimg = "background-image";

include "../main/header.php";


?>


<h1> <?php echo $product[$id - 1]['title'] ?></h1>
<h3> <?php echo $product[$id - 1]['price'] ?>/m2</h3>
<img class = "container" src="../../assets/img/prod/<?php echo $product[$id - 1]['img'] ?>" alt="">
<p> <?php echo $product[$id - 1]['description'] ?></p>


<?php
include "../main/footer.php";
?>
