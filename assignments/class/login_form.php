<?php  //login_form.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Aquinton</title>
    <link rel="favorite icon" type="image/x-icon" href="../favicon.ico" />	
    <link href="/css/tanga.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<?php
include $_SERVER['DOCUMENT_ROOT']."/modules/header.php";
?>
<h1> Login - Gain More Rights! </h1>
<article>
<form id="mainForm" action="login_authenticate.php" method="POST">
	<input type="username" id="username" name="username"></input>
	<label for="username">Username</label>
	<br /><br />
	<input type="password" id="password" name="password"></input>
	<label for="password">Password</label>
	<br />
	<input type="submit" value="Login" />
	</form>
	</article>
	<article>
	<br>
	<a href="create_account_form.php" title="Create new account">I don't have an account</a>	
	<br>
	</article>
	    <footer>
    <nav>
    <?php include $_SERVER['DOCUMENT_ROOT']."/modules/footer.php"; ?>
    </nav>
    </footer>
</body>
</html>