<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
</head>
<body>
	<h2>PHP To Do List</h2>
	<!-- Getting data from user -->
	<form action="database.php" method="POST">
		<input type="text" name="data" placeholder="Enter some thing....">

		<input type="submit" value="add">

	</form>
	<table>


	
	<!--Fetch and  Display complete data of database -->
	<?php

		$con = new mysqli("localhost","root","","todolist");
		$select_query = "select * from mytodo";
		$select_query_object = $con->query($select_query);

		
		while ($data = $select_query_object->fetch_assoc()) 
        { 
			echo "<tr>";
			echo "<td>".$data["name"]."</td>";
			echo "<td> <a href='edit.php?id=".$data["id"]."'> Edit </a> </td>";
			echo "<td> <a href='delete_to_do.php?id=".$data["id"]."'> Delete </a> </td>";
			echo "</tr>";	
			
		}
	?>
	</table>




	
</body>
</html>