<!DOCTYPE html>
<html>
<head>
	<title>Chord Entry | Guitar Database</title>
	<link href="../../css/tanga.css" type="text/css" rel="stylesheet" media="screen">

	<script type="text/javascript">
	function showValue1(newValue){document.getElementById("range1").innerHTML=newValue;}
	function showValue2(newValue){document.getElementById("range2").innerHTML=newValue;}
	function showValue3(newValue){document.getElementById("range3").innerHTML=newValue;}
	function showValue4(newValue){document.getElementById("range4").innerHTML=newValue;}
	function showValue5(newValue){document.getElementById("range5").innerHTML=newValue;}
	function showValue6(newValue){document.getElementById("range6").innerHTML=newValue;}
	</script>
	</head>
<body>
<h1>Enter Chord</h1>
<br><br><br>
<form id="mainForm" action="insertChord.php" method="POST">

<input type="range" min="0" max="5" value="0" step="1" onchange="showValue1(this.value)" name="string1" />
	<span id="range1">0</span>
	<input type="range" min="0" max="5" value="0" step="1" onchange="showValue2(this.value)" name="string2" />
	<span id="range2">0</span>
	<input type="range" min="0" max="5" value="0" step="1" onchange="showValue3(this.value)" name="string3" />
	<span id="range3">0</span>
	<input type="range" min="0" max="5" value="0" step="1" onchange="showValue4(this.value)" name="string4" />
	<span id="range4">0</span>
	<input type="range" min="0" max="5" value="0" step="1" onchange="showValue5(this.value)" name="string5" />
	<span id="range5">0</span>
	<input type="range" min="0" max="5" value="0" step="1" onchange="showValue6(this.value)" name="string6" />
	<span id="range6">0</span>
<br>
	<input type="text" id="chord_name" name="chord_name"></input>
	<label for="chord_name">Chord Name</label>
	<br /><br />

	<input type="text" id="txtChapter" name="txtChapter"></input>
	<label for="txtChapter">Chapter</label>
	<br /><br />

	<input type="text" id="txtVerse" name="txtVerse"></input>
	<label for="txtVerse">Verse</label>
	<br /><br />

	<label for="chord_name">Chord Name:</label><br />
	<textarea id="chord_name" name="chord_name" rows="1" cols="50"></textarea>
	<br /><br />

	<label>Topics:</label><br />

<?php
// This section will now generate the available check boxes for topics
// based on what is in the database


// It would be better to store these in a different file
$dbUser = 'php';
$dbPass = 'php-pass';
$dbName = 'pluckit';
$dbHost = '127.0.0.1'; // for my configuration, I need this rather than 'localhost'

try
{
	// Create the PDO connection
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	// prepare the statement
	$statement = $db->prepare('SELECT id, name FROM topic');
	$statement->execute();

	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<input type="checkbox" name="chkTopics[]" value="' . $row["id"] . '">';
		echo $row['name'];
		echo '</input><br />';

		// put a newline out there just to make our "view source" experience better
		echo "\n";
	}

}
catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}

?>

	<br />

	<input type="submit" value="Add to Database" />
	</form>
	<footer>
  <nav>
    <ul>
    <li><a href="../index.php" title="Return to Assignments">Back to Assignments</a></li>
    <li>Contact: <a href="mailto:qui10001@byui.edu" title="Send me an email">Email</a> </li>
      <li><a href="http://www.github.com/zvakanaka" title="My projects">Github</a> </li>  
    </ul>
  </nav>
</footer>
</body>
</html>