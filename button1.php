<?php
if (isset($_POST['on1']))
{
print "
<html>
<body>
<title>DIY Hacking</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DIY Hacking - Internet of Things Implementation</h2>
<h2>The Device has been Turned ON </h2>
</body>
</html>
";

$servername = "localhost";
$username = "db_user";
$password = "Passw0rd";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE status SET current_state='ON' where button='1'";

if ($conn->query($sql) === TRUE) {
  echo "<center>Button Status recorded</center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
else if(isset($_POST['off1']))
{
print "
<html>
<body>
<title>DIY Hacking</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DIY Hacking - Internet of Things Implementation</h2>
<h2>The Device has been Turned OFF </h2>
</body>
</html>
";

$servername = "localhost";
$username = "db_user";
$password = "Passw0rd";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE status SET current_state='OFF' where button='1'";

if ($conn->query($sql) === TRUE) {
  echo "<center>Button Status recorded</center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}

$command = escapeshellcmd("sudo python /var/www/html/rasbpi1.py.new");

$output = shell_exec($command);

?>
