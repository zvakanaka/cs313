<?php //delete_chord.php
session_start();
require $_SERVER['DOCUMENT_ROOT']."/modules/stranger_go_login.php";
require 'load_db.php';


	if (empty($_POST["deleteRadio"])) {
    //$_SESSION["deleteErr"] = "Choose chord to delete";
	} else {
		$chord_id = ($_POST["deleteRadio"]);
	}

	try {
		$db = loadDB();
		$query = 'DELETE FROM chord WHERE chord_id = :id_of_chord';

		$statement = $db->prepare($query);
		$statement->bindParam(":id_of_chord", $chord_id);
		$statement->execute();
	}
	catch (PDOException $ex)
	{
		echo "DB Error";
		die();
	}
// redirect
header("Location: show_chords.php");
die();
?>