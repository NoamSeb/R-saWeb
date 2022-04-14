<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="medias/icon_clé.svg">
    <title>Evasio</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include('connexion.php');
    $requete = "SELECT * FROM PRODUIT WHERE id_produit={$_GET["id"]}";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
</head>

<body>
    <nav>
        <ul>
            <a href="main.php"><img src="medias/Evasio_logo.svg" class="logo"></a>
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
                <li>Mentions</li>
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
                <li>Mentions</li>
            </a>
        </ul>

    </nav>
    <p class="ariane"><span class="arianePass">Accueil / Enigmes</span> /
        <?= $result['nom'] ?>
    </p>
    <h1 class="name">
        <?= $result["nom"] ?>
    </h1>
    <div class="detail">
        <div>
            <img class="imgDetail"src="<?= $result['image'] ?>-640-light.jpg" alt="" srcset="<?= $result['image'] ?>-320-light.jpg,
                    <?= $result['image'] ?>-640-light.jpg 2x,
                    <?= $result['image'] ?>-1024-light.jpg 3x">
        </div>
        <div class="description">
            <h3><?= $result['description'] ?></h3>
            <h4 class="indice"><?= $result['indice'] ?></h4>
        </div>
    </div>
    <a href='resa.php?id=<?= $r["id_produit"] ?>'class="resa"><h4 >Réserver</h4></a>
</body>

</html>