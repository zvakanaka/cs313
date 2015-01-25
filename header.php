<h1>  
<?php 
$navs = array("Home"=>"index.php", "Assignments"=>"assignments.php", "About me"=>"about.php");
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
  	echo "<li><a href=\"" . "$VAL" . "\""; 
      if (strcasecmp(ltrim($_SERVER['PHP_SELF'], "/"), $VAL) == 0) {
      	echo "class=\"on\"";
      }
      echo ">" . "$KEY" . "</a></li>";
  } ?>
  </ul>
</nav>
