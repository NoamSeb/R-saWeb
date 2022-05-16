<!DOCTYPE html>
<html lang="fr">
<?php
include('connexion.php');
$requete = ('SELECT * FROM PRODUIT, GENRE WHERE id_genre=ext_genre');

if (isset($_GET['filtres']) && $_GET['filtres'] != '') {
    $requete .= " AND id_genre=" . $_GET['filtres'];
}

$stmt = $db->query($requete);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

$stgr = $db->query('SELECT * FROM GENRE');
$resr = $stgr->fetchall();


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
    <p class="ariane"><a href="index.php"><span class="arianePass">Accueil </span></a>/ Enigmes</p>
    <form action="enigmes.php" method="GET" class="tri">
        <div class="filtres">
            <select name="filtres" id="filtre-select">
                <option value="">Filtrer</option>
                <?php foreach ($resr as $rg) {
                    var_dump($rg); ?>

                    <option value="<?= $rg['id_genre'] ?>"><?= $rg['genre'] ?></option>
                <?php } ?>
                <input type="submit" value="valider" id="ValidFilter">
            </select>
        </div>
    </form>


    <main class="engmain">
        <?php foreach ($result as $r) { ?>
            <div class="ImgEnig">
                <div class="enigNameImg">
                    <a href='affiche-detail.php?id=<?= $r["id_produit"] ?>'><img src="<?= $r['image'] ?>-640-light.jpg" alt="" srcset="<?= $r['image'] ?>-320-light.jpg,
                    <?= $r['image'] ?>-640-light.jpg 2x,
                    <?= $r['image'] ?>-1024-light.jpg 3x">
                        <h1><?= $r['nom'] ?></h1>
                    </a>
                </div>
            </div>
        <?php } ?>
    </main>
</body>

</html>