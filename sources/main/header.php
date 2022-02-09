<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>


    <link rel="stylesheet" href="/reno/assets/style/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <script src="https://kit.fontawesome.com/da7397688c.js" crossorigin="anonymous"></script>

</head>

<body>

<?php
session_start();


?>

<header id="">
    <div class="logo-header">
        <a href="/reno/index.php"><img class='div-title-logo'
                                       src="/reno/assets/img/source/logo-reno-tiny.png"></img></a>
                    <h1 class="site-title" style="font-style: italic">L C D R</h1>
        <h1 id="site-subtitle">"Les chauds de la Réno !"</h1>

    </div>

    <!-- Nav pour les différentes pages/ancres -->
    <nav class="nav-header">
        <li class="list-header"><a id="" class="btn btn-outline-primary" href="/reno/index.php">Accueil</a></li>
        <li class="list-header"><a id="" class="btn btn-outline-primary" href="/reno/sources/blog/blog.php">Blog</a>
        </li>
        <li class="list-header"><a id="" class="btn btn-outline-primary " href="/reno/sources/products/products.php">Catalogue</a>
        </li>
        <li class="list-header"><a id="" class="btn btn-call-to-action" href="/reno/sources/contact/devis.php">Devis</a>
        </li>
        <li class="list-header"><a id="" class="btn btn-primary" href="/reno/sources/contact/contact.php">Contact</a>
        </li>



    </nav>
</header>


<div class="<?php echo $bgimg ?>" id="">

