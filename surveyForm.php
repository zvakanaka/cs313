<?php
	$ageErr = $_SESSION["ageErr"];
	$handErr = $_SESSION["handErr"];
	$threatErr = $_SESSION["threatErr"];
	$climateErr = $_SESSION["climateErr"];
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>What is your age range? <span class="error"> <?php echo $ageErr;?></span>
<select name="age">
<option value=""> -- Choose -- </option>
<option value="kid">0-12</option>
<option value="teen">13-19</option>
<option value="ya">20-29</option>
<option value="adult">30-50</option>
<option value="wise">51-969</option>
</select></p>
<p> Which hand do you use to write?  <span class="error"> <?php echo $handErr;?></span>
	<input type="checkbox" name="lhanded" value="1"> Left 
	<input type="checkbox" name="rhanded" value="1"> Right <br></p>
	<p> Specify the the greatest cause of global climate change in your opinion: <span class="error"> <?php echo $climateErr;?></span>
	<select name="climate">
	<option value=""        > -- Choose One -- </option>
	<option value="earth"   > Earth's Natural Cycle </option>
	<option value="farts"   > Cattle Flatulance</option>
	<option value="industry"> Industries </option>
	<option value="volcanoe"> Volcanoes </option>
	<option value="none"    > I do not believe in it at all</option>
	<option value="other"   > Other </option>
	</select></p>
<p> How big of a threat is global climate change? <span class="error"> <?php echo $threatErr;?></span><br>
	<input type="radio" name="threat" value="1">None
	<input type="radio" name="threat" value="2">Somewhat
	<input type="radio" name="threat" value="3">Severe
</p>
	<br><br>
<input type="submit">
</form> 