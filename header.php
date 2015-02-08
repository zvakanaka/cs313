<h1>  
<?php 
$navs = array("Home"=>"index.php", "Assignments"=>"assignments/index.php", "About me"=>"about.php");
//TODO fix assignments tab
$pageContainedInNavs = false;
  foreach($navs as $KEY => $VAL) {
      if (strcasecmp(ltrim($_SERVER['PHP_SELF'], "/"), $VAL) == 0) {
      	echo "$KEY";
      	$pageContainedInNavs = true;
      }
  } 
if ($pageContainedInNavs == false) {
	echo "CS313";
}
?>
</h1>
<nav>
  <ul>
  <?php 
  foreach($navs as $KEY => $VAL) {
    //Nav will work within directories now (as long as links are in root)
    $arr = explode('/',$_SERVER['PHP_SELF']);
    $slashCount = count($arr) -1;

  	echo "<li><a href=\"" ;
    for ($i = 1; $i < $slashCount; $i++) {
      echo "../";
    } 
    echo  "$VAL" . "\"";

    if (strcasecmp(ltrim($_SERVER['PHP_SELF'], "/"), $VAL) == 0) {
      echo "class=\"on\"";
    }
    echo ">" . "$KEY" . "</a></li>";
  } ?>
  </ul>
</nav>
