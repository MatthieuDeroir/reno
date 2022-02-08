<?php

$sex = filter_input(INPUT_POST, "sex");
$last_name = filter_input(INPUT_POST, "last_name");
$first_name = filter_input(INPUT_POST, "first_name");
$tel = filter_input(INPUT_POST, "tel");
$email_address = filter_input(INPUT_POST, "email_address");
$postal_address =filter_input(INPUT_POST,"postal_address");
$postal_code=filter_input(INPUT_POST,"postal_code");
$city=filter_input(INPUT_POST,"city");
$newsletter=filter_input(INPUT_POST,"newsletter");
$consent_data=filter_input(INPUT_POST,"consent_data");


include_once '../config.php';

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
//creation de la requete

//$requete = $pdo->prepare("insert into subscription (sex) values (:sex)");
$requete = $pdo->prepare("insert into subscription(sex,last_name, first_name, tel, email_address,postal_address, postal_code,city, newsletter, consent_data)
values (:sex,:last_name, :first_name, :tel, :email_address, :postal_address, :postal_code,:city, :newsletter, :consent_data)");


$requete->bindParam(":sex", $sex);
$requete->bindParam(":first_name", $first_name);
$requete->bindParam(":last_name", $last_name);
$requete->bindParam(":tel", $tel);
$requete->bindParam(":email_address", $email_address);
$requete->bindParam(":postal_code", $postal_code);
$requete->bindParam(":postal_address", $postal_address);
$requete->bindParam(":city", $city);
$requete->bindParam(":newsletter", $newsletter);
$requete->bindParam(":consent_data", $consent_data);

//executer la requete
$requete->execute();

var_dump($requete);

header("location: ../index.php");
