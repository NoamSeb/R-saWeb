<?php
    if (isset($id_produit)) {
        // On récupère le nom du produit.
        $product = $db->prepare('SELECT nom FROM PRODUIT WHERE id_produit = :id_produit');
        $product->execute(['id_produit' => $id_produit]);
        $result = $product->fetch();

        $client = $db->prepare('SELECT * FROM CLIENT WHERE id_client=:id_client');
        $client->execute(['id_client'=>$client_id]);
        $resCli = $client->fetch();


        
        // On reformate la date forme FR jj/mm/aa.
        $date = date("d-m-Y", strtotime($date));

        // Envoie du mail au client
        
        $contenu = "<img src='medias/Evasio_logo.svg'></br>
        <h1>Merci {$resCli['prenom']} {$resCli['nom']} d'avoir réservé le produit: <br>{$result['nom']}</br>Pour le : <br>{$date} </h1>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $email=mail($email, 'Réservation produit', $contenu, implode("\r\n", $headers));

        // Envoie du mail au gestionnaire
    
        $contenu = "<img src='medias/Evasio_logo.svg'>
        <h1>Merci {$resCli['prenom']} {$resCli['nom']} d'avoir réservé le produit: </br>{$result['nom']}</br>Pour le : </br>{$date} </h1>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $email=mail('noam.sebahoun@edu.univ-eiffel.fr', 'Réservation produit', $contenu, implode("\r\n", $headers));
    }
?>