<h1>Hello Docker!</h1>
<h4>Attempting PgSQL connection from php...</h4>
<?php 
	$host = 'pgsql';
	$port = 5432;
	$user = 'postgres';
	$pass = 'postgres';
	$conn = pg_connect("host=$host port=$port user=$user password= $pass");

	if (!$conn) {
	    die("Connection failed: ");
	} 
	echo "Connected to PgSQL successfully!";
?>
