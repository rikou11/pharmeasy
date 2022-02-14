<?php
/* variable   */

$a = mysqli_real_escape_string($con, $_SESSION['email']);
$operation = $user = $id = "";
$name = "SELECT fullname from revendeur where `email`='" . $a . "' ";

// ? logout
if (isset($_POST['logout'])) {
    unset($_POST['tokken']);
    unset($_POST['email']);
    session_destroy();
    $_SESSION = array();
    header("location: ../login.php");
}
// ? select from admin table 
$QuerrySelectFromAdmineUsername = "SELECT * FROM admin WHERE `email` ='" . $a . "'  ";
$result = $con->query($QuerrySelectFromAdmineUsername);

//  !-------------------------------------------------------------------

// ? select for table 
$QuerySelectAll = " SELECT * FROM client WHERE  `valider` <> false ";
$ResultQuerySelectAll = $con->query($QuerySelectAll);


// ? delete
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $emailrevendeur = $_GET["emailrevendeur"];
    $telrevendeur = $_GET["telrevendeur"];

    $email_client = $_GET["email"];
    $fullname_client = $_GET["fullname"];

    $sender = 'InfoDz';
    $recipient = $email_client;

    $subject = "Demande annuler";

    $mailmessage = "<h1>Bienvenue Mr." . $fullname_client . " </h1> <br>------<br> <h2>Votre commande a été annulée

<br> 
-Informations enregistrées incorrectes<br>
 -Retournez votre demande et vérifiez les informations enregistrées<br>
 -Nom et Prénom<br>
 -Numéro de téléphone<br>
 -Activité Commerciale<br>

     
   <br>-----------<br>
   Renvoyer cliquez ici:<br>
    https://www.infodz.net/index#telechargement    <br>
   Pour plus d'informations contactez nous
   
   <br>
   Équipe d'assistance
  envoiyer par : " . $emailrevendeur . "
   <br>
   numero de telephone :   " . $telrevendeur . "</h2>";
    $headers  = "From: InfoDz <contact@infodz.net>\n";
    $headers .= "Cc: <contact@infodz.net>\n";
    $headers .= "X-Sender: InfoDz <support@infodz.net>\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: contact@infodz.net\n"; // Return path for errors
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



    mail($recipient, $subject, $mailmessage, $headers) or exit("error email send");

    $del =  mysqli_query($con, "DELETE FROM `client` WHERE `client`.`id` = $id ");
    header("location:liste-validation.php");
};
