<?php  //login_page.php


?>
<form id="mainForm" action="login_authenticate.php" method="POST">

	<input type="username" id="username" name="username"></input>
	<label for="username">Username</label>
	<br /><br />

	<input type="password" id="password" name="password"></input>
	<label for="password">Password</label>
	<br /><br />

	<input type="submit" value="Login" />
	</form>
	<a href="create_account_form.php" title="Create new account">I don't have an account</a>