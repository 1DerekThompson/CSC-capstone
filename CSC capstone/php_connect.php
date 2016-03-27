

<?php

/*
CONTRIBUTED BY: Leslie
ALL OLD CODE ASSOCATIED WITH WAMP. OBSOLETE 10/28/15
$db_name = 'test';
$db_host = "localhost";
$db_pass = "";
$db_user = "root";

$connect = mysqli_connect($db_host, $db_user, $db_pass);
if ($connect->connect_error){
	die("Die you" . $connect->connect_error. "<br >");
}else{
	
	echo "connected credentials only";
}
$selected = mysqli_select_db($connect,$db_name);
if ($selected) {
	echo "Connected to database test <br />";
}else{
	  die("Could not select examples");
}*/


// $mysql = new mysqli("localhost", "root"," ", "test") or die(mysql_error("Could not establish connection"));
//Code contributed by Matt Jadud.
//Code below is similar to the above commented code because it allows the php to connect
//with the database file.

$database_file = 'sqlite:inventory.sqlite';
$mysql = new PDO($database_file);

function get_users($mysql){
$result = $mysql->query ('SELECT id, Username, Password FROM Users');

foreach ($result as $column) {
	//print $column['id'] . "\t";
	//print $column['Username'] . "\t";
	//print $column['Password'] . "\n";
	}
	while($column['id'] > 0){
	 if($column['Username'] == 'User' and $column['Password'] == 'Host') {
		 //echo ("Connected to database " ."<br>");
		 header("location: Options.php");
		 break;
	 }
	else {
		echo ("Not connected");
		break;
	}
	
	}
	}
	


get_users($mysql);


//if(isset($_POST['submit'])){
	//$username = $_POST ['username'];
	//$password = $_POST ['password'];
	//echo "Username: ". $username	. "Password: " . $password;
	 
 


?>