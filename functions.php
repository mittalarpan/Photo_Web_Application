<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;



function view_images(){
	
	global $db ; 
	
	$query = "select *from image_info" ; 
	$run_query = mysqli_query($db , $query); 
	
	while($row_images = mysqli_fetch_array($run_query)){
	 
	    $img = $row_images['image_id'] ;   
		$name = $row_images['image'] ; 
		echo " <a href = 'details.php?detail=$img'> <img src = 'images/$name' width = 300  height = 300 /> </a> " ;  
	}
	
	
}













?> 