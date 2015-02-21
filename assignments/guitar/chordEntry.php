<!DOCTYPE html>
<?php require $_SERVER['DOCUMENT_ROOT']."/modules/stranger_go_login.php"; ?>
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
<form id="mainForm" action="insert_chord_db.php" method="POST">
	<div style="float: left"> <span>E</span>
<input type="range" min="0" max="4" value="0" step="1" onchange="showValue1(this.value)" name="string1" />
	<span id="range1">0</span>
	</div><div style="float: left"> <span>A</span>
	<input type="range" min="0" max="4" value="0" step="1" onchange="showValue2(this.value)" name="string2" />
	<span id="range2">0</span>
		</div>	<div style="float: left"> <span>D</span>
	<input type="range" min="0" max="4" value="0" step="1" onchange="showValue3(this.value)" name="string3" />
	<span id="range3">0</span>
		</div>	<div style="float: left"> <span>G</span>
	<input type="range" min="0" max="4" value="0" step="1" onchange="showValue4(this.value)" name="string4" />
	<span id="range4">0</span>
		</div>	<div style="float: left"> <span>B</span>
	<input type="range" min="0" max="4" value="0" step="1" onchange="showValue5(this.value)" name="string5" />
	<span id="range5">0</span>
		</div>	<div style="float: left"> <span>E</span>
	<input type="range" min="0" max="4" value="0" step="1" onchange="showValue6(this.value)" name="string6" />
	<span id="range6">0</span>
		</div>
<br>
	<br><br>	<br><br>
	<input type="text" placeholder="Chord Name" id="chord_name" name="chord_name"></input>
	<input type="submit" value="Submit Chord" class="btn btn-primary"/>
	</form>
	<footer>
  <nav>
    <ul>
    <li><a href="show_chords.php" title="Return to Chords">Back to Chords</a></li>
 <?php include '../../modules/footer.php' ?>
 </footer>
  </nav>
</footer>
</body>
</html>