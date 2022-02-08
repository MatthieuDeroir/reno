<?php
// création d'un titre de page
$title = "Blog - Reno";
include "../main/header.php";


include_once '../../config.php';

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete
$requete = $pdo->prepare("select * from articles");
//executer la requete
$requete->execute();
//recuperer le resultat sous forme d'un tableau
$article = $requete->fetchAll();

?>


<section id="card-session-event" class="event-section">
    <div class="container-section-event">
        <?php
        foreach ($article as $e){
        ?>
        <div class="container-card-event" ">
        <div class="card-event" style="background-color: <?php echo $e['color']?>55">
            <h3 class="card-title-event"><?php echo $e['title'] ?></h3>
            <div class="image-selected" >
                <p><?php echo $e['text']?></p>
                <p></img>Vues : <?php echo $e['view_count']?></p>
            </div>
            <a href="article.php?id=<?php echo $e["id"] ?>" class="link-btn" ><?php echo 'VOIR' ?></a>
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
