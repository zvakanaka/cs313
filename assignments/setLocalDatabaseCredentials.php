<?php
$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

if ($openShiftVar === null || $openShiftVar == "")
{
     // Not in the openshift environment
     $dbHost = "localhost";
     // …
}
else
{
     // In the openshift environment
     $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
     // …
}

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
?>