<?php 
session_start();
$_SESSION["ageErr"] = $_SESSION["threatErr"] = $_SESSION["handErr"] = $_SESSION["climateErr"] = "";
?>
<!DOCTYPE html>
<html>
<head></head>
<link href="css/tanga.css" type="text/css" rel="stylesheet" media="screen">
<body>
	<?php
	include 'header.php';

	if (!isset($_SESSION["quizTaken"]) || $_SESSION["quizTaken"] == false) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
			if (empty($_POST["comment"])) {
			} else {
				$comment = $_POST["comment"];
			}
			if ($_SESSION["ageErr"] == "" && $_SESSION["threatErr"] == "" && $_SESSION["handErr"] == "" && $_SESSION["climateErr"] == "") {
				$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
				$_SESSION["quizTaken"] = true;
				$txt = "age=$age,rhanded=$rhanded,lhanded=$lhanded,climate=$climate,threat=$threat,";
				fwrite($myfile, $txt);
				fclose($myfile);
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
	include 'footer.php';
	?>

</body>
</html>