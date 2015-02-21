<!DOCTYPE html>
<html>
  <head>
    <title>Aquinton | Assignments</title>
    <link rel="favorite icon" type="image/x-icon" href="../favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
    <link href="/css/tanga.css" type="text/css" rel="stylesheet" media="screen">
  </head>
  <body>
<?php
include $_SERVER['DOCUMENT_ROOT']."/modules/header.php";
?>
    <div>
      <h2>Assignments</h2>
    <article>
    <h3>Global Warming Survey</h3>
      <a href="survey/surveyValidate.php" title="Start taking the survey">Take the Survey</a>
      <a href="survey/surveyProcess.php" title="Reults of Global Warming Survey">Skip to Results</a>
      <h3>Guitar Database</h3>
      <a href="guitar/search_form.php" title="Search Guitar Database">Search</a>
      <a href="guitar/show_chords.php" title="Browse Chords in Guitar Database">Browse</a>  
      <a href="guitar/chordEntry.php" title="Create Guitar Chords in Database">Create</a>
      <a href="guitar/show_chords.php" title="Delete Guitar Chords in Database"> Delete</a>
      <h3>Testing</h3>
      <a href="testing/info.php" title="Could be the upcoming assignment's workspace">Latest Test</a>
      <a href="class/login_form.php" title="Could be the upcoming assignment's workspace">Password Hashing</a> 
    </article>
    </div>
    <footer>
    <nav>
    <?php
include $_SERVER['DOCUMENT_ROOT']."/modules/footer.php";
?>
    </nav>
    </footer>
</body>
</html>
