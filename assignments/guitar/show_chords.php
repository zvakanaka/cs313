<!DOCTYPE html>
<?php
session_start();
include 'draw_chord.php';
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
?>
<html>
<body>
<head>
<link rel="stylesheet" href="../../css/tanga.css">
  <title>Chords | Guitar</title>  
</head>
<?php
include $_SERVER['DOCUMENT_ROOT']."/modules/header.php";
?>
<form id="mainForm" action="delete_chord.php" method="POST">
<?php
//show_chords.php
	echo "<h2>Chords</h2>";
  $chords = 0;
  foreach ($db->query("SELECT chord_name, strings, chord_id FROM chord") as $row) {
    $chords++;
    echo "<div style=\"float:left\" id=\"chord_box\"><h3 id=\"heading\">".$row['chord_name']."</h3>";
    //turn strings into split number array
    $chars = str_split( $row['strings'], 1 );
    if (!empty($chars)) {
      drawChord($chars[0], $chars[1], $chars[2], $chars[3], $chars[4], $chars[5], "tab{$chords}.gif");
     //echo "Finger Placement: ".$row['strings'];
      echo "<img src=\"tab{$chords}.gif\" style=\"width:100px\" alt=\"Chord Representation\" />";
      
      echo "<input type=\"radio\" \"style=float: top\" name=\"deleteRadio\" value=\"".$row['chord_id']."\" />";

  } else {
    echo "<p><span style='color:red'>No Results</span></p>";
  }
  echo "</div>";
}
?>
 <input type="submit" class="btn btn-danger" value="Delete Chord" /> 
</form>
<form id="addChord" action="chordEntry.php" method="POST">
  <span style="text-align: right"><input type="submit" class="btn btn-primary" value="Add Chord" /></span></p>
  </form>
<footer>
<nav>
 <?php include '../../modules/footer.php'; ?>
 </nav>
 </footer>
</body>
</html>