<?php
//insertChord.php
require $_SERVER['DOCUMENT_ROOT']."/modules/stranger_go_login.php";
// get the data from the POST
$string1 = $_POST['string1'];
$string2 = $_POST['string2'];
$string3 = $_POST['string3'];
$string4 = $_POST['string4'];
$string5 = $_POST['string5'];
$string6 = $_POST['string6'];

$all_strings = "$string1$string2$string3$string4$string5$string6";
$name_of_chord = $_POST['chord_name'];

require 'load_db.php';
try {
  $db = loadDB();
  $query = 'INSERT INTO chord(chord_name, strings, creation_date, created_by) VALUES(:name_of_chord, :all_strings, UTC_DATE(), (select user_id from user where user_name=:user_name))';

  $statement = $db->prepare($query);
  $statement->bindParam(':name_of_chord', $name_of_chord);
  $statement->bindParam(':all_strings', $all_strings);
  $statement->bindParam(':user_name', $_SESSION['userLoggedIn']);
  $statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB.";
	die();
}

header("Location: show_chords.php");
die();
?>