<?php
include('./easypharmConfig/connection.php');
// ?varible
$alert = 0;
$email = $tel =  $adresse =   $fname =  $server = '';
$err_fname  = $err_email = $err_adresse = $err_tel = $err_server = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} //fin


//test de validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //variables
    $fname = test_input($_POST["fname"]);
    $email = test_input($_POST["email"]);
    $tel = test_input($_POST["tel"]);
    $server = test_input($_POST["server"]);
    $adresse =  test_input($_POST["adresse"]);

    //* full name
    if (empty($_POST["fname"])) {
        $err_fname = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Le Nom et prénom est requis
    </div> ";
        $alert = true;
    } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $err_fname =       "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
            Seules les lettres et les espaces blancs sont autorisés
            </div> ";
            $alert = true;
        } else {
            $err_fname = "  <div class='bg-green-200 mt-2 py-2 px-4 text-xs text-green-600 rounded-sm'>
            avec success
            </div> ";
        }
    }

    // *  adresse
    if (empty($_POST["adresse"])) {
        $err_adresse = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Adresse est requis
    </div> ";
        $alert = true;
    } else {
        $adresse = test_input($_POST["adresse"]);

        if (!preg_match("/^[0-9a-zA-Z']*$/", $_POST["adresse"])) {
            $err_adresse =
                "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
    Seules les lettres et les espaces blancs sont autorisés
    </div> ";
            $alert = true;
        } else {
            $err_adresse = "  <div class='bg-green-200 mt-2 py-2 px-4 text-xs text-green-600 rounded-sm'>
            avec success
            </div> ";
        }
    }

    //* telephone
    if (empty($_POST["tel"])) {
        $err_tel = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Le téléphone est requis
    </div> ";
        $alert = true;
    } else {
        $err_tel = "  <div class='bg-green-200 mt-2 py-2 px-4 text-xs text-green-600 rounded-sm'>
        avec success
        </div> ";
    }
    // * email
    if (empty($_POST["email"])) {
        $err_email = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Email est requis
    </div> ";
        $alert = true;
    } else {

        $err_email = "  <div class='bg-green-200 mt-2 py-2 px-4 text-xs text-green-600 rounded-sm'>
        avec success
        </div> ";
        if (empty($_POST["server"])) {
            $err_server = "<div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
            Email est requis
        </div> ";
            $alert = true;
            exit;
        } else {
            $err_server = "  <div class='bg-green-200 mt-2 py-2 px-4 text-xs text-green-600 rounded-sm'>
            avec success
            </div> ";


            $sql = "INSERT INTO `client` (`fullname`,`tel`,`email`,`adresse`,`nombre_server`) VALUES ('$fname','$tel','$email','$adresse','$server')";
            if (mysqli_query($con, $sql)) {
                header("location:continue/continue.php");
                echo "hello";
            } else {
                echo "data not inserted";
            }
        }
    }
}
