<?php

$to = "bruno.gmc@wanadoo.fr"; // ton email

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "Nouveau message du formulaire";

$body = "Nom: $nom\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

$headers = "From: $email";

if(mail($to,$subject,$body,$headers)){
    header("Location: formulaire.html?status=success");
} else {
    header("Location: formulaire.html?status=error");
}
exit();

?>
