<?php //logout.php
session_start();

unset($_SESSION["userLoggedIn"]);

// redirect
header("Location: ../index.php");
die();
?>