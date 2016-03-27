<html>
<!--Creates the webpage title.-->
<title>Inventory Manage</title>

<body>
<!--This creates the title on the webpage itself.-->
<h1>Inventory Manage </h1>
<!--This was changed from <form action = "#" type="post"> Look below -->

<form action="search.php" method="post">
	<p>Please type in what you would like to look for.</p>
	<!--<a href="#>"<button>Search</button></a>-->
	<!--The above code comment created a weird format search bar so I removed it. 10/26/15-->
	<input type = "text" name = "search" value = "button">
	<br/>
	<input type="submit" name = "submit" value="Search">
</form>


<form action="true_login.html">
<button type = "submit" value = " "> Logout</button>
</form>

<form action= "add_2_db.html"> 
<button type = "submit" value = " "> Add new item to inventory</button>
</form>
</body>
</html>