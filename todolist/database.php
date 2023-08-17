<?php

             $data = $_POST["data"];
            // Connection to the database
            $con = new mysqli("localhost","root","","todolist"); 

            $insert_query = "insert into mytodo(name) values('".$data."')";

            if($con->query($insert_query)==TRUE)
            { 
                // After run the insert query it will shift to the main where data is display
                header("Location:index.php");
            }
   


	
?>

