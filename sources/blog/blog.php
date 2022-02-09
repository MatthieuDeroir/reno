<?php
// création d'un titre de page
$title = "Blog - Reno";
$bgimg = "background-image";
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

<div class="container-prest"><h1 style="text-decoration: underline">Nos articles</h1></div>


<section id="card-session-event" class="event-section">
    <div class="container-prest">
        <?php
        foreach ($article as $e){
        ?>
        <div class="container-card-event" ">
        <div class="card-event" style="background-image: url(../../assets/img/blog/<?php echo $e['img']?>)">
            <h3 class="card-title"><?php echo $e['titre'] ?></h3>
            <div class="image-selected" >
                <p>par <?php echo $e['author']?></p>
                <p class="card-view">Vues : <?php echo $e['view_count']?></p>
            </div>
            <a href="article.php?id=<?php echo $e["id"] ?>" class="btn btn-call-to-action" ><?php echo 'LIRE' ?></a>
        </div>
    </div>
    <?php
    }
    ?>
</section>

<?php
include "../main/footer.php";
?>
