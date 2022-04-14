<form action="test_mail.php" method="POST">
<input type="text" name="contenu">
<input type="submit" value="Envoyer email">
</form>

<?php
if(isset($_POST["contenu"])){
    $contenu="<h1>". $_POST["contenu"]."</h1>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

mail('renaud.eppstein@u-pem.fr','test subject',$contenu,implode("\r\n", $headers));
echo "Mail envoyé";
}

?>
