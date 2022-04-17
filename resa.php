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
    <title>Evasion</title>
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
                <li>Informations</li>
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
                <li>Informations</li>
            </a>
        </ul>

    </nav>
    <p class="ariane"><span class="arianePass">Accueil </span>/ Réservation</p>
    <main>
        <select name="Enigmes" id="Escape">
            <option value="">choisissez une escape room</option required>
            <?php foreach ($result as $r) { ?>
                
                <option value="<?= $r['value'] ?>"><?= $r['nom'] ?></option>
            <?php } ?>
        </select>
        <form action="confirm.php" method="POST">
            <input type="text" name="FirstName" id="FirstNname" placeholder="Entrez votre prénom :*" required>
            <input type="text" name="name" id="name" placeholder="Entrez votre nom :*" required>
            <input type="text" name="mail" id="mail" placeholder="Entrez votre adresse email :*" required>
            <p class="requier">* Requis</p>
            <a href="confirm.php" class="valid"><input type="submit" value="Réserver !"></a>
        </form>
        <?php
        if (isset($_POST["contenu"])) {
            $contenu = "<h1>" . $_POST["contenu"] . "</h1>";
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';

            mail('noam.sebahoun@edu.univ-eiffel.fr', 'test subject', $contenu, implode("\r\n", $headers));
            echo "Mail envoyé";
        } ?>
    </main>




</body>


</html>