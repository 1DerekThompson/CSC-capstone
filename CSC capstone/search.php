<html>
<title>
<body>
<?php

$database_file = 'sqlite:inventory.sqlite';
$mysql = new PDO($database_file);

if($_POST && isset($_POST['search'])) {
	echo "<br>\n";
	$query = $mysql->prepare('SELECT * FROM Items WHERE Name = :partname');
	$subst = array ('partname' => $_POST['search']);
    $query->execute($subst);

	echo "<TABLE>";
	echo "<tr>";
	echo "<td>[id]</td>";
	echo "<td>[Name]</td>";
	echo "<td>[Amount]</td>";
	echo "<td>[Detail]</td>";
	echo "</tr>";
	
	while ($row = $query->fetch()) {
		//print_r($row);
		echo "<tr>";
		echo "<td>$row[id]</td>";
		echo "<td>$row[Name]</td>";
		echo "<td>$row[Amount]</td>";
		echo "<td>$row[Detail]</td>";		
		echo "</tr>";
	}
	echo "</TABLE>";

 } else 
   echo "Item searched for was not found.";

?>

</body>
</html>