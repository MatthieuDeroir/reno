<?php

// création d'un titre de page
$title = "Nos produits";
$bgimg = 'background-image';


include "../main/header.php";

include_once '../../config.php';

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete
$requete = $pdo->prepare("select * from products");
//executer la requete
$requete->execute();
//recuperer le resultat sous forme d'un tableau
$products = $requete->fetchAll();

?>

<div class="container-prest"><h1 style="text-decoration: underline">Nos prestations</h1></div>


<section id="card-session-event" class="event-section">
    <div class="container-prest">
        <?php
        foreach ($products as $e){
        ?>
        <div class="container-card-event" ">
        <div class="card-event" style="background-image: url(../../assets/img/prod/<?php echo $e['img']?>)">
            <h3 class="card-title"><?php echo $e['title'] ?></h3>
            <div class="" >
                <p class="card-text"><?php echo $e['description']?></p>
                <p class="card-price"><?php echo $e['price']?>€/m2</p>
            </div>
            <a href="product-sheet.php?id=<?php echo $e["id"] ?>" class="btn btn-call-to-action" ><?php echo 'EN SAVOIR PLUS' ?></a>
        </div>
    </div>
    <?php
    }
    ?>
</section>

<?php
include "../main/footer.php";
?>
