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

// we could put additional checks here to verify that all this data is actually provided


// It would be better to store these in a different file
$dbUser = 'php';
$dbPass = 'php-pass';
$dbName = 'pluckit';
$dbHost = '127.0.0.1'; // for my configuration, I need this rather than 'localhost'

try
{
	// Create the PDO connection
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	// First Add the Scripture
//	$query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
	$query = 'INSERT INTO chord(chord_name, strings, creation_date) VALUES(:name_of_chord, :all_strings, UTC_DATE())';

	$statement = $db->prepare($query);

	$statement->bindParam(':name_of_chord', $name_of_chord);
	$statement->bindParam(':all_strings', $all_strings);

	$statement->execute();

	// get the new id
	$scriptureId = $db->lastInsertId();

	// Now go through each topic id in the list from the user's checkboxes
	/*
	foreach ($topicIds as $topicId)
	{
		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');

		$statement->bindParam(':scriptureId', $scriptureId);
		$statement->bindParam(':topicId', $topicId);

		$statement->execute();
	}*/
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: show_chords.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>