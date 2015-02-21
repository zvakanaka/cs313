<?php
session_start();
//reset_session.php
$_SESSION['quizTaken'] = FALSE;

//TODO: query user's data such as if they have taken a survey

// redirect
header("Location: surveyValidate.php",TRUE,303);
die();
?>
