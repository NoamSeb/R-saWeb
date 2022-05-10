<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="medias/icon_clé.svg">
    <title>Evasion</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <?php
    include('connexion.php');
    $requete = "SELECT * FROM PRODUIT WHERE id_produit={$_GET["id"]}";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $produit = $_GET["id"];
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
            <img class="imgDetail" src="<?= $result['image'] ?>-640-light.jpg" alt="" srcset="<?= $result['image'] ?>-320-light.jpg,
                    <?= $result['image'] ?>-640-light.jpg 2x,
                    <?= $result['image'] ?>-1024-light.jpg 3x">
        </div>
        <div class="description">
            <h3><?= $result['description'] ?></h3>
            <h4 class="indice"><?= $result['indice'] ?></h4>
            <h3>Durée : <?= $result['temps'] ?></h3>
        </div>
    </div>
    <br>
    <form action="confirm.php" method="POST">
        <p class="requier">Entrez votre prénom *</p>
        <input type="text" name="prenom" id="prenom" placeholder="ex : Noam" required>
        <br>
        <p class="requier">Entrez votre nom *</p>
        <input type="text" name="nom" id="nom" placeholder="ex : Sebahoun" required>
        <input type="text"  name="id" hidden value="<?= $produit; ?>">
        <br>
        <p class="requier">Entrez votre adresse e-mail *</p>
        <input type="text" name="email" id="email" placeholder="ex : prénom.nom@xyz.fr" required>
        <br>
        <p class="requier">* Requis</p>
        <input type="submit" value="Réserver !">
        
    </form>
    
</body>

</html>