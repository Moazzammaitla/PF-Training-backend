<!DOCTYPE html>
<html>
<head>
	<title>To DO list</title>


	<?php

		$con = new mysqli("localhost","root","","todolist");
		$update_query = "select * from mytodo where id=".$_GET["id"];
		$rs = $con->query($update_query);
		$r = $rs->fetch_assoc();


	?>
</head>


<body>
	
	<form action="update.php" method="POST">
		<input type="text" name="name" placeholder="Update the data" value="<?php echo $r["name"];?>">
        <input type="hidden" name="id" value="<?php echo $r["id"];?>">

		<input type="submit" value="update">
	</form>

</body>
</html>