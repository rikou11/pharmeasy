<?php
include('./easypharmConfig/connection.php');
session_start();


// ?varible
$tokken = generateRandomString();
$email =  $pass = '';
$err_pass = $err_email = "";




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
    $email = test_input($_POST['email']);
    $pass =  test_input($_POST['password']);
    // echo  $hash = password_hash($pass, PASSWORD_DEFAULT);

    // // Print the generated hash code
    // // echo "Generated hash code: " . $hash;
    // //$2y$10$zgrJ4l7kZj25XZPjBNM9DOAjwvCOzUmjKaPf1IJGKfiWELse1Xh32

    // $verify = password_verify($pass, $hash);

    // // Print the result depending if they match 
    // // if ($verify) {
    // //     echo 'Correct Password!';
    // // } else {
    // //     echo 'Password is Incorrect';
    // // }
    $sql = "SELECT id FROM admin WHERE email = '$email' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    // If result matched $email and $mypassword, table row must be 1 row	
    $sqlPass = "SELECT id FROM admin WHERE email = '$email' AND pass = '$pass'";
    $resultPass = mysqli_query($con, $sqlPass) or die(mysqli_error($con));
    $rowPass = mysqli_fetch_array($resultPass, MYSQLI_ASSOC);

    $countPass = mysqli_num_rows($resultPass);

    if ($count == 1) {
        if ($countPass == 1) {
            $_SESSION["email"] = $email;
            // $_SESSION["tokken"] = $tokken;

            header("location:Admin/liste-demande.php");
        } else {
            $err_pass = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
         Password inccorect 
             </div> ";
        }
    } else {
        $err_email = "  <div class='bg-red-200 mt-2 py-2 px-4 text-xs text-red-600 rounded-sm'>
        Email inccorect 
         </div> ";
    }
}
