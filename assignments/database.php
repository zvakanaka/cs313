<!DOCTYPE html>
<html>
  <head>
    <title>Aquinton | Database</title>
    <link rel="favorite icon" type="image/x-icon" href="favicon.ico" />
        <link href="../css/tanga.css" type="text/css" rel="stylesheet" media="screen">
  </head>
  <body>
<?php
include '../header.php'; 
?>
    <div>
    <article>
<?php
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
  echo "<h2>Songs</h2> "; 
  foreach ($db->query("SELECT song_name, song_composer FROM song") as $row)
  {
    echo $row['song_name'] . "<br>";
  }

function formulate() {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($db->query("SELECT song_name, song_composer FROM song") as $row)
    {
      echo "<h2>Songs</h2> " . $row['song_name'];
      echo "<h2>Composer</h2> " . $row['song_composer'];
      echo "<br />";
      echo "<h2>Chords </h2>";
      foreach ($db->query("SELECT chord_name FROM chord") as $row)
      {
        echo $row['chord_name'];
        echo " ";
      }
      echo "<p> That was a Song</p>";
    }
  }
}

?>
  <h2>Query</h2>
  <form action="searchdb.php" method="POST">
   Search: <input type="text" name="pluckit_search_term" /><br />
   <input type="submit" name="submit" value="Submit" />
   </form>
 </td>
</tr>
</table>
</form>
</article>
<?php include '../footer.php' ?>
</div>
</body>
</html>
