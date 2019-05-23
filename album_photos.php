

<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;

?>

<html>
<head>
<title>album</title> 
</head> 
<body>
<h2> <b> PHOTOS OF THE ALBUM </b> </h2> 

<?php

 $alb_name = $_GET['name'] ; 
  $query = "select *from image_info where image_info.name = '$alb_name' " ; 
  $run_query = mysqli_query($db , $query) ; 
  
  while($row_images = mysqli_fetch_array($run_query)){
        $img = $row_images['image_id'] ;   
		$name = $row_images['image'] ; 
		echo " <a href = 'details.php?detail=$img'> <img src = 'images/$name' width = 300  height = 300 /> </a> " ;
  
  }
?>
</body>












</html> 