<?php
session_start();
if (!isset($_SESSION['pass'])) {

    header("location:./downloadpage.php");
    exit();
}
