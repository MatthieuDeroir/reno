<?php
// création d'un titre de page
$title = "Nous Contacter";
$bgimg = 'background-image-contact';

include "../main/header.php";


?>

<section id="contact-form">
    <div class="form-img">
        <h2 class="form-title-usr">Pour nous contacter</h2>
        <p class="form-desc-usr">contact-form-desc</p>
        <div class="form-wrap">
        <form class="" action="../../actions/insertSubscription.php" method="post">
            <!--
            <div class="div-input-label">
                <label for="sex">Civilité : </label>
                <select type="text " name="sex" id="sex" required>
                    <option value="M">Homme</option>
                    <option value="F">Femme</option>
                    <option value="O">Autre</option>
                </select>
            </div>
            -->
            <div class="div-input-label">
                <label for="last_name">Nom : </label>
                <label for="last-name"></label><input type="text" name="last_name" id="last-name" required>
            </div>

            <div class="div-input-label">
                <label for="first_name">Prénom : </label>
                <input type="text" name="first_name" id="first-name" required>
            </div>

            <div class="div-input-label">
                <label for="email">Email : </label>
                <input type="text" name="email_address" id="email" required>
            </div>

            <div class="div-input-label">
                <label for="tel">Téléphone : </label>
                <input type="text" name="tel" id="tel">
            </div>
            <!--
            <div class="div-input-label">
                <label for="postal_address">Adresse : </label>
                <input type="text" name="postal_address" id="postal_address">
            </div>
            <div class="div-input-label">
                <label for="postal_code">CP : </label>
                <input type="text" name="postal_code" id="postal_code">
            </div>

            <div class="div-input-label">
                <label for="city">Ville : </label>
                <input type="text" name="city" id="city">
            </div>

            -->

            <!-- Pro ? -->
            <!-- Un vrai professionel du javascript -->

            <div class="div-chek-label">
                <input type="checkbox" name="rgpd" id="rgpd">
                <label for="rgpd">Je souhaite recevoir les informations par mail de la part des <b>Chauds de la Réno !</b></label>
            </div>


            <div class="div-chek-label">
                <input type="checkbox" name="rgpd" id="rgpd" required>
                <label for="rgpd">Je consent à ce que les données partagées ci-dessus puissent être exploitées à des
                    fins commerciales.</label>
            </div>

            <div class="form-btn-wrap">
            <input type="submit" value="Envoyer" class="btn-submit">
            </div>
        </form>
        </div>
    </div>
</section>

<?php
include "../main/footer.php";
?>
