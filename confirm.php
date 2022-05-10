<!DOCTYPE html>
<html lang="fr">
<?php
include('connexion.php');

$prenom = $_POST["prenom"] ?? "";
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$id_produit = $_POST["enigmes"] ?? $_POST["id"] ?? "";

// On vérifie si tous les paramètres sont bien remplis dans le formulaire. Sinon erreur.
if (!empty($email) && !empty($nom) && !empty($prenom)) {
    // Ici, on exécute une requête préparée. https://phpdelusions.net/pdo_examples/select.
    $client = $db->prepare('SELECT id_client FROM CLIENT WHERE email = :email');
    $client->execute(['email' => $email]);
    $result = $client->fetch();

    if (empty($result)) {
        $InsertCl = "INSERT INTO CLIENT (prenom,nom,email) VALUES ('$prenom','$nom','$email')";
        $db->query($InsertCl);
        // On récupère le dernier id inséré.
        $client->execute(['email' => $email]);
        $result = $client->fetch();
    }

    $client_id = $result['id_client'] ?? NULL;

    // Si le client existe et que le produit existe aussi, alors on insère la commande.
    if (!empty($client) && !empty($id_produit)) {
        $InsertCo = "INSERT INTO COMMANDE (ext_client,ext_produit) VALUE ('$client_id','$id_produit')";
        $db->query($InsertCo);

    }
}

//$InsertCl = "INSERT INTO CLIENT (prenom,nom,email) VALUES ('$prenom','$nom','$email')";
//$db->query($InsertCl);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="medias/icon_clé.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Evasion</title>
</head>

<body>
    <p><a href="main.php" class="mainback"> Retour à l'accueil</a></p>
    <main class="mainconfirm">
        <?php if (isset($InsertCo)){?>
            <h1 class="confirm"> Merci d'avoir commandé chez</h1>
            <img src="medias/Evasio_logo.svg" class="imgconfirm">
            <h3 class="confirm"> Vous recevrez bientôt un mail de confirmation </h3>
            <?php include('mail.php')?>
        <?php } else {?>
            <h1 class="confirm"> ERREUR</h1>
            <img src="medias/hackerman.webp" class="imgconfirm">
            <h3 class="confirm"> Veuillez remplir correctement le formulaire </h3>
        <?php } ?>
    </main>
</body>

</html>