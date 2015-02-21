<?php  //stranger_go_login.php
session_start();
function _isset($val) { return isset($val); }
//check user is logged in
if (!_isset($_SESSION['userLoggedIn']) || $_SESSION['userLoggedIn'] == FALSE) {
 header("Location: ../../assignments/class/login_form.php");
 die();
}
?>