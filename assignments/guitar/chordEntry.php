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
	<br><br>	<br><br>
	<input type="text" id="chord_name" name="chord_name"></input>

	<label for="chord_name">Chord Name</label>
	<br>
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