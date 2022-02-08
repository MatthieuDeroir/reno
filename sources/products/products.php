<?php

// création d'un titre de page
$title = "Nos produits";

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


<section id="card-session-event" class="event-section">
    <div class="container-section-event">
        <?php
        foreach ($products as $p){
        ?>
        <div class="container-card-event" ">
        <div class="card-event" style="background-color: <?php echo $e['color']?>55">
            <h3 class="card-title-event"><?php echo $p['title'] ?></h3>
            <div class="image-selected" >
                <p><?php echo $p['text']?></p>
            </div>
            <a href="product-sheet.php?id=<?php echo $p["id"] ?>" class="link-btn" ><?php echo 'VOIR' ?></a>
        </div>
    </div>
    <?php
    }
    ?>
    </div>

</section>

<?php
include "../main/footer.php";
?>
