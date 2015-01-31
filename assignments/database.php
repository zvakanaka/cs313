<!DOCTYPE html>
<html>
  <head>
    <title>Aquinton | Database</title>
    <link rel="favorite icon" type="image/x-icon" href="favicon.ico" />
        <link href="css/tanga.css" type="text/css" rel="stylesheet" media="screen">
  </head>
  <body>
<?php
include 'header.php'; 
?>
    <div>
    <article>
<?php
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

foreach ($db->query("SELECT song_name, song_composer FROM song") as $row)
{
   echo "<h1>Songs</h1> " . $row['song_name'];
   echo "<h1>Composer</h1> " . $row['song_composer'];
   echo "<br />";
echo "<h1>Chords </h1>";
foreach ($db->query("SELECT chord_name FROM chord") as $row)
{
   echo $row['chord_name'];
   echo " ";
}

}
?>
</article>
<?php include 'footer.php' ?>
</div>
</body>
</html>