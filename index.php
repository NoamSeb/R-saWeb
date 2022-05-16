<!DOCTYPE html>
<html lang="fr">
<?php
// $db=new PDO('mysql:host=localhost;dbname=DB_EVASIO;port:3306','root','root');
include('connexion.php');
$stmt = $db->query('SELECT * FROM PRODUIT');
$result = $stmt->fetchall();
// var_dump($result);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link rel="icon" href="medias/icon_clé.svg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Evasio</title>
</head>

<body>
    <nav>
        <ul>
            <a href="index.php"><img src="medias/Evasio_logo.svg" class="logo"></a>
            <a href="enigmes.php" class="nav">
                <li>Enigmes</li>
            </a>
            <a href="resa.php" class="nav">
                <li>Réservation</li>
            </a>
            <a href="team.php" class="nav">
                <li>Qui sommes nous</li>
            </a>
            <a href="mentions.php" class="nav">
                <li>Mentions Légales</li>
            </a>
            <div class="burger">
                <span></span>
            </div>
        </ul>
        <ul class="navOuvert">
            <a href="enigmes.php" class="nav">
                <li>Enigmes</li>
            </a>
            <a href="resa.php" class="nav">
                <li>Réservation</li>
            </a>
            <a href="team.php" class="nav">
                <li>Qui sommes nous</li>
            </a>
            <a href="mentions.php" class="nav">
                <li>Mentions Légales</li>
            </a>
        </ul>
    </nav>
    <p class="ariane">Accueil</p>
    <main>
        <h1 class="homeTitle">Le concept :</h1>
        <p> Evasio est une société proposant des escapes rooms dont vous devrez vous échapper en un temps limité.
            <br><br>Vous cherchez une expérience unique qui fera chauffer vos méninges ? Alors Evasio est LA solution !
        </p>
        <div class="SliderAll">
            <img src="images/fleche_gauche.png" alt="" class="arrowLeft">
            <div class="js-slider">
                <div class="js-photos">
                    <?php foreach ($result as $r) { ?>
                        <div class="js-photo">
                            <img src="<?= $r['image'] ?>-640-light.jpg" alt="" srcset="<?= $r['image'] ?>-320-light.jpg,
                            <?= $r['image'] ?>-640-light.jpg 2x,
                            <?= $r['image'] ?>-1024-light.jpg 3x">
                            <h2 class="EscNameSlider"><?= $r['nom'] ?></h2>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <img src="images/fleche_droite.png" alt="" class="arrowRight">
        </div>
        <h1 class="homeTitle"> Où nous trouver ?</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1005349879015!2d2.5830813156267576!3d48.837221010151026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20Universit%C3%A9%20Gustave-Eiffel!5e0!3m2!1sfr!2sfr!4v1648732409745!5m2!1sfr!2sfr" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </main>
</body>


</html>