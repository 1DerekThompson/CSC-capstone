


<html>
<title>Adding to the Database</title>
<body>
<?php
$database_file = 'sqlite:inventory.sqlite';
$mysql = new PDO($database_file);
$new_variable = 'http://localhost/button1.html';


?>
<a href="<?php echo $new_variable;?>"> <?php echo "<td>{row['Name']}</td>" ?> </a>
<br>

<!--echo "<td>{$row['Name']}</td><td>{$row['Amount']}</td><td>{$row['Detail']}</td>";-->

<br>

<form action="delete_item.html">
<!--Not implemented yet will after figuring out how to get the multiple pages problem fixed.-->
<button type = "submit" value = " "> Delete Item</button>
</form>

<br>
<form action= "Add_Amount.html">
<!--Not implemented see above-->
<button type = "submit" value = " "> Add to Item Amount</button>
</form>

<br>

<form action = "Options.php">
<!--Not implemented see above-->
<button type = "submit" value = " ">Search a new item</button>
</form>

<form action = "true_login.html">
<button type = "submit" value = " ">Log Out</button> 


</body>


</html>

