<!DOCTYPE html>
<html lang="fr">
<?php
include('connexion.php');
$requete = ('SELECT * FROM PRODUIT');
if (isset($_GET["GENRE"])) {
    $requete = $requete . " AND id_genre={$_GET["GENRE"]}";
}
$stmt = $db->query($requete);
$stgr = $db->query('SELECT * FROM GENRE');
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

$resr = $stgr->fetchall();
// var_dump($resr);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="medias/icon_clé.svg">
    <link rel="stylesheet" href="style.css">
    <script src="js/enigme.js"></script>
    <title>Evasio</title>
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
    <p class="ariane"><span class="arianePass">Accueil </span>/ Enigmes</p>
    <select class="filtres" name="filtres" id="filtre-select">
        <option value="">Filtrer</option>
        <?php foreach ($resr as $rg) {
            var_dump($rg); ?>

            <option value="<?= $rg['id_genre'] ?>"><?= $rg['genre'] ?></option>
        <?php } ?>
        <form>
            <input type="submit" value="valider">
        </form>
    </select>
    <main class="engmain">
        <br>
        <?php foreach ($result as $r) { ?>
            <div class="ImgEnig">
                <a href='affiche_detail.php?id=<?= $r["id_produit"]?>'><img src="<?= $r['image'] ?>-640-light.jpg" alt="" srcset="<?= $r['image'] ?>-320-light.jpg,
                    <?= $r['image'] ?>-640-light.jpg 2x,
                    <?= $r['image'] ?>-1024-light.jpg 3x"></a>
            </div>
        <?php } ?>
    </main>
</body>

</html>