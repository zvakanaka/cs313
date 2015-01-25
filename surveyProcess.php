<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/tanga.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<?php
include 'header.php';

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$fileKeysVals = explode(',',fgets($myfile));

$countSurveys = 0;
$kid = $teen = $ya = $adult = $wise = 0;
$lhanded = $rhanded = 0;
$climate = "";
$farts = $earth = $industry = $volcanoe = $none = $other = 0;
$threat1 = $threat2 = $threat3 = 0;
//loop that builds cumulitave stats
	//Split on commas and loop, within loop, split on =, read 0 into key, 1 into val
	//Within each loop, compare key and find which val to ++ depending on key and possibly val.  We may start each at 0 each time.
foreach ($fileKeysVals as $keyAndVal) {
	$key = explode('=',$keyAndVal)[0];
	if ($key == "") {
		//protect from blank key and val
	} else {
		$val = explode('=',$keyAndVal)[1];

		switch ($key) {
			case "age":
			if (strcmp($val, "kid") == 0) {
				$kid++;
			} else if (strcmp($val, "teen") == 0) {
				$teen++;
			} else if (strcmp($val, "ya") == 0) {
				$ya++;
			} else if (strcmp($val, "adult") == 0) {
				$adult++;
			} else if (strcmp($val, "wise" ) == 0) {
				$wise++;
			}
			break;
			case "threat":
			if ($val == 3) {
				$threat3++;
			} else if ($val == 2) {
				$threat2++;
			} else if ($val == 1) {
				$threat1++;
			}
			break;
			case "lhanded":
			if ($val == 1) {
				$lhanded++;
			} 
			break;
			case "rhanded":
			if ($val == 1) {
				$rhanded++;
			} 
			break;
			case "climate":
			$countSurveys++;
			if (strcmp($val, "farts") == 0) {
				$farts++;
			} else if (strcmp($val, "earth") == 0) {
				$earth++;
			} else if (strcmp($val, "industry") == 0) {
				$industry++;
			} else if (strcmp($val, "volcanoe") == 0) {
				$volcanoe++;
			} else if (strcmp($val, "none" ) == 0) {
				$none++;
			} else if (strcmp($val, "other") == 0) {
				$other++;
			} 
			break;
		}
	}
}
fclose($myfile);
	//convert notes
	//          x      X distance from edge
	//circle 41,39 44,57
?>
<div>
<article>
<h1> Survey Results </h1>
<?php
$kidStat = number_format((($kid/($kid+$teen+$ya+$adult+$wise))*100), 1);
$teenStat = number_format((($teen/($kid+$teen+$ya+$adult+$wise))*100), 1);
$yaStat = number_format((($ya/($kid+$teen+$ya+$adult+$wise))*100), 1);
$adultStat = number_format((($adult/($kid+$teen+$ya+$adult+$wise))*100), 1);
$wiseStat = number_format((($wise/($kid+$teen+$ya+$adult+$wise))*100), 1);

$rhandedStat = number_format((($rhanded/($rhanded+$lhanded))*100), 1);
$lhandedStat = number_format((($lhanded/($rhanded+$lhanded))*100), 1);

$fartsStat = number_format((($farts/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);
$earthStat = number_format((($earth/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);
$industryStat = number_format((($industry/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);
$volcanoeStat = number_format((($volcanoe/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);
$noneStat = number_format((($none/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);
$otherStat = number_format((($other/($farts+$earth+$industry+$volcanoe+$none+$other))*100), 1);

$threat1Stat = number_format((($threat1/($threat1+$threat2+$threat3))*100), 1);
$threat2Stat = number_format((($threat2/($threat1+$threat2+$threat3))*100), 1);
$threat3Stat = number_format((($threat3/($threat1+$threat2+$threat3))*100), 1);

echo "<dl style=\"width: 300px\">
<div class=\"statBox\"><article><h1>Age Range</h1>
<dt>Kids (0-12)</dt>
<dd><div class=\"bar\" style=\"width: $kidStat%\">$kidStat%</div></dd>
<dt>Teens (13-19)</dt>
<dd><div class=\"bar\" style=\"width: $teenStat%\">$teenStat%</div></dd>
<dt>Young Adults (20-29)</dt>
<dd><div class=\"bar\" style=\"width: $yaStat%\">$yaStat%</div></dd>
<dt>Adults (30-50)</dt>
<dd><div class=\"bar\" style=\"width: $adultStat%\">$adultStat%</div></dd>
<dt>Wise Persons (51-969)</dt>
<dd><div class=\"bar\" style=\"width: $wiseStat%\">$wiseStat%</div></dd>
</article></div></dl>

<dl style=\"width: 300px\">
<div class=\"statBox\"><article><h1>Left or Right Handed</h1>
<dt>Left Handed</dt>
<dd><div class=\"bar\" style=\"width: $lhandedStat%\">$lhandedStat%</div></dd>
<dt>Right Handed</dt>
<dd><div class=\"bar\" style=\"width: $rhandedStat%\">$rhandedStat%</div></dd>
</article></div></dl>

<dl style=\"width: 300px\">
<div class=\"statBox\"><article><h1>Threat Level</h1>
<dt>None</dt>
<dd><div class=\"bar\" style=\"width: $threat1Stat%\">$threat1Stat%</div></dd>
<dt>Somewhat</dt>
<dd><div class=\"bar\" style=\"width: $threat2Stat%\">$threat2Stat%</div></dd>
<dt>Severe</dt>
<dd><div class=\"bar\" style=\"width: $threat3Stat%\">$threat3Stat%</div></dd>
</article></div></dl>

<dl style=\"width: 300px\">
<div class=\"statBox\"><article><h1>Beliefs of Causes</h1>
<dt>Earth's Natural Cycle</dt>
<dd><div class=\"bar\" style=\"width: $earthStat%\">$lhandedStat%</div></dd>
<dt>Cattle Flatulance</dt>
<dd><div class=\"bar\" style=\"width: $fartsStat%\">$rhandedStat%</div></dd>
<dt>Industries</dt>
<dd><div class=\"bar\" style=\"width: $industryStat%\">$lhandedStat%</div></dd>
<dt>Volcanoes</dt>
<dd><div class=\"bar\" style=\"width: $volcanoeStat%\">$volcanoeStat%</div></dd>
<dt>Do not believe</dt>
<dd><div class=\"bar\" style=\"width: $noneStat%\">$noneStat%</div></dd>
<dt>Other Cause(s)</dt>
<dd><div class=\"bar\" style=\"width: $otherStat%\">$otherStat%</div></dd>
</article></div></dl>";

//	readfile("newfile.txt");
//surveyProcess.php
?>
<br>
</article>
</div>
<footer>
  <nav>
    <ul>
    <li><a href="surveyValidate.php">Back to Survey</a></li>
    <li>Contact: Adam Quinton <a href="mailto:qui10001@byui.edu">Email</a> </li>
      <li><a href="http://www.github.com/zvakanaka">Github</a> </li>  
    </ul>
  </nav>
</footer>
</body>
</html>