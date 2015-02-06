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

try
{
   $user = "php";
   $password = "php-pass";
   $db = new PDO("mysql:host=127.0.0.1;dbname=scriptureRepo", $user, $password);
}
catch (PDOException $ex)
{
   echo "Error!: " . $ex->getMessage();
   die();
}

foreach ($db->query("SELECT scripture_book, scripture_chapter, scripture_verse, scripture_content FROM scriptures") as $row)
{
   echo "<p><b>" . $row['scripture_book'];
   echo " " . $row['scripture_chapter'];
   echo ":" . $row['scripture_verse'];
   echo " -</b> \"" . $row['scripture_content'] . "\"";
   echo "<br />";
}
$input = "Eber";
$results = $db->query("SELECT scripture_book, scripture_chapter, scripture_verse, scripture_content FROM scriptures WHERE scripture_book LIKE '%".$input."%'");
if ($results) {
  foreach ($results as $row)
  {
    echo "Results: <p><b>" . $row['scripture_book'];
    echo " " . $row['scripture_chapter'];
    echo ":" . $row['scripture_verse'];
    echo " -</b> \"" . $row['scripture_content'] . "\"";
    echo "<br />";
  }
} else if ($results == ""){
  echo "<p>No Results Found for $input</p>";
}
?>
</article>
<?php include '../footer.php' ?>
</div>
</body>
</html>
