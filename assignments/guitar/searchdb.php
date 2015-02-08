<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../css/tanga.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<?php
	include '../../header.php';
  $openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');
  if ($openShiftVar === null || $openShiftVar == "")
  {
    // Not in the openshift environment
    $dbHost = "localhost";
    try
    {
      $user = "php";
      $password = "php-pass";
      $db = new PDO("mysql:host=127.0.0.1;dbname=pluckit", $user, $password);
    }
    catch (PDOException $ex)
    {
      echo "Error!: " . $ex->getMessage();
      die();
    }
  }
  else
  {
    // In the openshift environment
    $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
    $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
    $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    $dbName = "pluckit";

    $db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  }
  if (!empty($_POST['pluckit_search_term']))
  {
  	$term = $_POST['pluckit_search_term'];
  } else {

  }
?>
<div>
<article>
<h1> Search Results </h1>
<?php
if (!(strcmp($_POST["pluckit_search_term"], "") == 0)) {
$search_type = $_POST["search_type"];
if (strcmp($search_type, "song_name") == 0) {
	foreach ($db->query("SELECT song_name, song_composer FROM song WHERE song_name LIKE '%$term%'") as $row) {
		echo "<h2>" . $row['song_name'] . "</h2>";
		echo "<h3>by " . $row['song_composer'] . "</h3>";
		echo "<p>Chords: ";
		foreach ($db->query("SELECT chord_name FROM chord") as $row)
		{
			echo $row['chord_name'];
			echo " ";
		}
		echo "</p>";
	}
} else if (strcmp($search_type, "composer_name") == 0) {
		foreach ($db->query("SELECT song_name, song_composer FROM song WHERE song_composer LIKE '%$term%'") as $row) {
		echo "<h2>" . $row['song_name'] . "</h2>";
		echo "<h3>by " . $row['song_composer'] . "</h3>";
		echo "<p>Chords: ";
		foreach ($db->query("SELECT chord_name FROM chord") as $row)
		{
			echo $row['chord_name'];
			echo " ";
		}
		echo "</p>";
	}
} else if (strcmp($search_type, "chord_name") == 0) {
	echo "<h2>Chords</h2>";
	foreach ($db->query("SELECT chord_name, strings FROM chord WHERE chord_name LIKE '%$term%'") as $row) {
		echo "<h3>" . $row['chord_name'] . "</h3>";
		echo "Finger Placement: " .  $row['strings'];
	}
	
	}
} else {
	echo "<p><span style='color:red'>ERROR: empty field</span></p>";
}

?>
</article>
</div>
<footer>
  <nav>
    <ul>
    <li><a href="database.php" title="Return to search page">Back to Search</a></li>
    <li>Contact: <a href="mailto:qui10001@byui.edu" title="Send me an email">Email</a> </li>
      <li><a href="http://www.github.com/zvakanaka" title="My projects">Github</a> </li>  
    </ul>
  </nav>
</footer>
</body>
</html>