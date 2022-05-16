<!DOCTYPE html>
<html lang="fr">
<?php
include('connexion.php');
$requete = ('SELECT * FROM PRODUIT ');
// WHERE id_produit={$_GET["id"]}
$stmt = $db->query($requete);
$result = $stmt->fetchall();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <p class="ariane"><a href="index.php"><span class="arianePass">Accueil </span></a>/ Réservation</p>
    <main>

        <form action="confirm.php" method="POST">
            <select name="enigmes" id="Escape">
                <option value="">choisissez une escape room</option required>
                <?php foreach ($result as $r) { ?>

                    <option value="<?= $r['id_produit'] ?>"><?= $r['nom'] ?></option>
                <?php } ?>
            </select>
            <p class="requier">Entrez la date de réservation *</p>
            <input type="date" name="date" id="date" min="2022-05-12" required class="Resa">
            <p class="requier">Entrez votre prénom *</p>
            <input type="text" name="prenom" id="prenom" placeholder="ex : Noam" required class="Resa">
            <br>
            <p class="requier">Entrez votre nom *</p>
            <input type="text" name="nom" id="nom" placeholder="ex : Sebahoun" required class="Resa">
            <br>
            <p class="requier">Entrez votre adresse e-mail *</p>
            <input type="text" name="email" id="email" placeholder="ex : prénom.nom@xyz.fr" required class="Resa">
            <br>

            <br>
            <p class="requier">* Requis</p>
            <input type="submit" value="Réserver !" class="Resa">
        </form>
    </main>




</body>


</html>