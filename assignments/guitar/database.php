<!DOCTYPE html>
<html>
  <head>
    <title>Aquinton | Database</title>
    <link rel="favorite icon" type="image/x-icon" href="favicon.ico" />
        <link href="../../css/tanga.css" type="text/css" rel="stylesheet" media="screen">
  </head>
  <body>
<?php
include '../../header.php'; 
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
?>
  <h3>Search</h3>
   <form action="searchdb.php" method="POST">
   <input type="text" name="pluckit_search_term" />
   <select name="search_type">
   <option value="chord_name">Chord</option>
    <option value="song_name">Song</option>
    <option value="composer_name">Composer</option>
  </select>
  <input type="submit" name="submit" value="Search" />
  </form>
  </article>
<?php
  echo "<h2>All Songs</h2><p>"; 
  foreach ($db->query("SELECT song_name, song_composer FROM song") as $row)
  {
    echo $row['song_name'] . " <b>- " . $row['song_composer'] . "</b><br>";
  }
  echo "</p>";
  ?>
  <?php include '../../footer.php' ?>
</div>
</body>
</html>
