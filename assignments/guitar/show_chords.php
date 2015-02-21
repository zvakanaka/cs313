<!DOCTYPE html>
<?php
	include '../../header.php';

//contains chord drawing function
  include 'draw_chord.php';

require 'load_db.php';
try {
  $db = loadDB();
}
catch (PDOException $ex)
{
  echo "DB Error";
  die();
}
?>

<html>
<body>
<head>
<link rel="stylesheet" href="../../css/tanga.css">
  <title>Chords | Guitar</title>  
</head>
<form id="mainForm" action="delete_chord.php" method="POST">
<?php
//show_chords.php
	echo "<h2>Chords</h2>";
  $chords = 0;
	foreach ($db->query("SELECT chord_name, strings, chord_id FROM chord") as $row) {
		$chords++;
    echo "<div style=\"float:left\" id=\"chord_box\"><h3 id=\"heading\">".$row['chord_name']."</h3>";
    //turn strings into split number array
    $chars = str_split( $row['strings'], 1 );
    if (!empty($chars)) {
     //echo "Finger Placement: " .  $row['strings'];
     drawChord($chars[0], $chars[1], $chars[2], $chars[3], $chars[4], $chars[5], "tab{$chords}.gif");
     echo "<img src=\"tab{$chords}.gif\" style=\"width:100px\" alt=\"Chord Representation\" title=\"Chord\"/>";
     echo "<input type=\"radio\" \"style=float: top\" name=\"deleteRadio\" value=\"".$row['chord_id']."\" />";
   } else {
    echo "<p><span style='color:red'>No Results</span></p>";
  }
  echo "</div>";
}
?>
<form id="addChord" action="chordEntry.php" method="POST">
  <span style="text-align: right"><input type="submit" class="btn btn-primary" value="Add Chord" /></span></p>
  </form>
  <span style="text-align: right"><input type="submit" class="btn btn-danger" value="Delete Chord" /></span></p>
</form>

 <?php include '../../footer.php' ?>
</body>
</html>