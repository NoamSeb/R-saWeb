<?php
    if (isset($id_produit)) {
        // On récupère le nom du produit.
        $product = $db->prepare('SELECT nom FROM PRODUIT WHERE id_produit = :id_produit');
        $product->execute(['id_produit' => $id_produit]);
        $result = $product->fetch();

        $contenu = "<h1>Merci d'avoir réservé le produit: {$result['nom']} </h1>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $email=mail($email, 'Réservation produit', $contenu, implode("\r\n", $headers));
    }
?>