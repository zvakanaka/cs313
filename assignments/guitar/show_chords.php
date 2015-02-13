<?php
	include '../../header.php';
  include 'info.php';
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
<?php
//show_chords.php
	echo "<h2>Chords</h2>";
  $chords = 0;
	foreach ($db->query("SELECT chord_name, strings FROM chord") as $row) {
		$chords++;
    echo "<div id=\"chord_box\"><h3>" . $row['chord_name'] . "</h3>";
    //turn strings into split number array
    $chars = str_split( $row['strings'], 1 );
    if (!empty($chars)) {
      //echo "Finger Placement: " .  $row['strings'];
     drawChord($chars[0], $chars[1], $chars[2], $chars[3], $chars[4], $chars[5], "tab{$chords}.gif");
     echo "<img src=\"tab{$chords}.gif\" style=\"width:100px\" alt=\"After Image Magicked Picture\" title=\"edited\"/>";
   } else {
    echo "<p><span style='color:red'>No Results</span></p>";
  }
  echo "</div>";
}
?>