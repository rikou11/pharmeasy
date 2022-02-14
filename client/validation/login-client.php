<?php
include('../easypharmConfig/connection.php');
session_start();

// ?varible
// $tokken = generateRandomString();
// $password = '';
$err_pass = "";




// ? random string
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

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

    $pass =  test_input($_POST['password']);
    // echo  $hash = password_hash($pass, PASSWORD_DEFAULT);
    //*--------------------------------------------------------------------
    $sql = "SELECT id FROM client WHERE pass = '$pass' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    //* ---------------------------------------------------------------------
    $sqlPass = "SELECT id FROM client WHERE  login = 0 AND pass = '$pass'";
    $resultPass = mysqli_query($con, $sqlPass) or die(mysqli_error($con));
    $rowPass = mysqli_fetch_array($resultPass, MYSQLI_ASSOC);
    $countPass = mysqli_num_rows($resultPass);
    //?--------------------------------------------------------------------------------
    if ($count == 1) {

        if ($countPass == 1) {

            // $_SESSION["tokken"] = $tokken;

            $query = "UPDATE `client` SET `login` = true  WHERE `client`.`pass` ='$pass'";
            if (mysqli_query($con, $query)) {
                $_SESSION["pass"] = $pass;
                header("location:downloadpage.php");
            } else {
                echo  "  err dans la requetes";
            }
        } else {
            $err_pass = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
          vous avez déja connecter a votre compte !
             </div> ";
        }
    } else {
        $err_pass = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Password inccorect 
         </div> ";
    }
}
