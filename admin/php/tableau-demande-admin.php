<?php
/* variable   */

$a = mysqli_real_escape_string($con, $_SESSION['email']);
$operation = $user = $id = "";
$name = "SELECT fullname from revendeur where `email`='" . $a . "' ";

// ? random string
function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
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
$QuerySelectAll = " SELECT * FROM client WHERE    `valider` <> true ";
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
    header("location:liste-demande.php");
};




/* date function */
/* echo $today = date("Y-m-d H:i:s");
 */

$startTime = date("Y-m-d H:i:s");

//display the starting time
/* echo 'Starting Time: ' . $startTime;
 */
//add 1 hour to time
$today = date('Y-m-d H:i:s', strtotime('+1 hour', strtotime($startTime)));

//display the converted time
/* echo 'Converted Time (added 1 hour): ' . $today; */
//  valider
if (isset($_GET["valider"])) {
    $id = $_GET["valider"];
    $email_client = $_GET["email"];
    $fullname_client = $_GET["fullname"];

    $emailrevendeur = $_GET["emailrevendeur"];
    $telrevendeur = $_GET["telrevendeur"];
    $pass = generateRandomString();
    // *-------------------------------------------------------------------------------
    $sender = 'InfoDz';
    $recipient = $email_client;

    $subject = "GDS pro version gratuit";

    $mailmessage = "<h1>Bienvenue Mr." . $fullname_client . " </h1> <br>------<br> <h2>Votre demande a été traitée avec succès
<br> Lien vers la version d'essai<br>
cliquez ici :
  <br>
  Lien :  https://bit.ly/GdsProFree <br>est le mot de pass :
 
     <br>
   
     NB : Cette version est valable 30 jours<br>
     Après l'installation, le programme vous demande le numéro <br>
     d'activation pour une version d'essai<br>
     Envoyez votre numéro d'appareil à l'équipe d'assistance
   <br>-----------<br>
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
    // mail($recipient, $subject, $mailmessage, $headers) or exit("error email send");
    // * ------------------------------------------------------------------------------------

    // header("location:REVliste-demande.php");
    $sql = " UPDATE `client` SET  date_confirmation='" . $today . "' ,`valider` = 1,`pass` = '" . $pass . "',  `valider_par` = '" . $a . "'   WHERE id = $id   ";
    if (mysqli_query($con, $sql)) {
        header("location:liste-demande.php");
    } else {
        echo  "  err dans la requetes";
    }
}
