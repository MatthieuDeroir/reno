<?php

// création d'un titre de page
$title = "Dynamic product name";

include "../main/header.php";

$id = filter_input(INPUT_GET, "id");

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete
$requete = $pdo->prepare("select * from product");
//executer la requete
$requete->execute();
//recuperer le resultat sous forme d'un tableau
$product = $requete->fetchAll();
// création d'un titre de page
$title = "Dynamic product name";

include "../main/header.php";

?>

<h1> <?php echo $product[$id]['title'] ?></h1>
<h3> <?php echo $product[$id]['author'].$product[$id]['date'] ?></h3>

<p> <?php echo $product[$id]['text'] ?></p>


<?php
include "../main/footer.php";
?>
