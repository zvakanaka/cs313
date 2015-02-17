<?php
//insertChord.php

// get the data from the POST
$string1 = $_POST['string1'];
$string2 = $_POST['string2'];
$string3 = $_POST['string3'];
$string4 = $_POST['string4'];
$string5 = $_POST['string5'];
$string6 = $_POST['string6'];

$all_strings = "$string1$string2$string3$string4$string5$string6";
$name_of_chord = $_POST['chord_name'];

echo "string1=$string1\n";
echo "string2=$string2\n";
echo "string3=$string3\n";
echo "string4=$string4\n";
echo "string5=$string5\n";
echo "string6=$string6\n";

echo "all_strings=$all_strings\n";

echo "name_of_chord=$name_of_chord\n";

$dbUser = 'php';
$dbPass = 'php-pass';
$dbName = 'pluckit';
$dbHost = '127.0.0.1';

try
{
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO chord(chord_name, strings, creation_date) VALUES(:name_of_chord, :all_strings, UTC_DATE())';

	$statement = $db->prepare($query);

	$statement->bindParam(':name_of_chord', $name_of_chord);
	$statement->bindParam(':all_strings', $all_strings);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: show_chords.php");
die();
?>