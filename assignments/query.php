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
$dbName = "pluckit";
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br />\n";


$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

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

?>
	</article>
	<?php include '../footer.php' ?>
	</div>
	</body>
	</html>
