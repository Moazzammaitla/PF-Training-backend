<?php
	


	$name = $_POST["name"];
	$id=$_POST["id"];

	$con = new mysqli("localhost","root","","todolist");

    // Here update query is runing
	$q = "update mytodo set name='".$name."' where id =".$id;


	if($con->query($q)==TRUE)
    {
		header("Location:index.php");

	}
?>

