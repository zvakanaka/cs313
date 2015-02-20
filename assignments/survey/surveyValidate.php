<?php 
session_start();
$_SESSION["ageErr"] = $_SESSION["threatErr"] = $_SESSION["handErr"] = $_SESSION["climateErr"] = "";
?>
<!DOCTYPE html>
<html>
<head></head>
<link href="../../css/tanga.css" type="text/css" rel="stylesheet" media="screen">
<body>
	<?php
	include '../../header.php';
if  ($_SESSION["quizTaken"]) {
} else {
	$_SESSION["quizTaken"] = FALSE;
}
	//Check if have not taken quiz
	if ($_SESSION["quizTaken"] == FALSE) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "PROCESSING";
			if (empty($_POST["age"])) {
				$_SESSION["ageErr"] = "Must choose age range";
			} else {
				$age = ($_POST["age"]);
			}
			if (empty($_POST["lhanded"])) {
				$lhanded = 0;
			} else {
				$lhanded = 1;
			}
			if (empty($_POST["rhanded"])) {
				$rhanded = 0;
			} else {
				$rhanded = 1;
			}
			if (!($rhanded == 1 || $lhanded == 1)) {
				$_SESSION["handErr"] = "Must not be blank";
			}
			if (empty($_POST["threat"])) {
				$_SESSION["threatErr"] = "Must not be blank";
			} else {
				$threat = ($_POST["threat"]);
			}
			if (empty($_POST["climate"])) {
				$_SESSION["climateErr"] = "Must choose one";
			} else {
				$climate = ($_POST["climate"]);
			}
			if ($_SESSION["ageErr"] == "" && $_SESSION["threatErr"] == "" && $_SESSION["handErr"] == "" && $_SESSION["climateErr"] == "") {
				$_SESSION["quizTaken"] = TRUE;
				$myfile = fopen("results.txt", "a") or die("Unable to open file!");
				$txt = "age=$age,rhanded=$rhanded,lhanded=$lhanded,climate=$climate,threat=$threat,";
				fwrite($myfile, $txt);
				fclose($myfile);
				//redirect to results page
				header("Location: surveyProcess.php");
				die();
			}
			else {
				echo "Form error";
			}
 		}
   	   include 'surveyForm.php';
	   echo "<br><a href=\"surveyProcess.php\">Skip to results</a>";	
	}
	else {
		echo "<p style=\"tect-align:center;\">You have taken the survey.";
		echo "<br><br><a href=\"surveyProcess.php\">Show results</a></p>";
	}
	include '../../footer.php';
	?>
	<form id="mainForm" action="reset_session.php" method="POST">
	   <span style="text-align: right"><input type="submit" class="btn btn-danger" value="Reset Session" /></span></p>	
</body>
</html>