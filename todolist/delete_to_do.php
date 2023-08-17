<?php
		
        
            // Here data is delete
            $con = new mysqli("localhost","root","","todolist"); 

            $del_query = "delete from mytodo where id =".$_GET["id"];


            if($con->query($del_query)==TRUE)
            {
                    // After run the delete query it will shift to the main where data is display
                header("Location:index.php");

            }
    



	
	
?>

