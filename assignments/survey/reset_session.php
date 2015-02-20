<?php
	session_start();
//reset_session.php
$_SESSION['quizTaken'] = FALSE;
// redirect
header("Location: surveyValidate.php",TRUE,303);
die();
?>
