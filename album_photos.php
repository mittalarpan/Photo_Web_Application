

<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;
$db2 = mysqli_connect("localhost" , "root" ,"" , "albums") ;
?>

<html>
<head>
<title>album</title> 
</head> 
<body>
<h2> <b> PHOTOS OF THE ALBUM </b> </h2> 

<?php
   
    
  $alb_id = $_GET['id'] ;
  $query = "select *from album_name where album_id = '$alb_id'" ; 
  $run_query = mysqli_query($db2 , $query) ;  
  while($row_images = mysqli_fetch_array($run_query)){
        $album_name = $row_images['name'] ;   
		$date = $row_images['date'] ;
        $desc = $row_images['description'] ;    		
		echo "$album_name<br>$date<br>$desc<br>" ;
  
  }
  echo "<a href = 'insert_image.php?insert=$alb_id'>INSERT_IMAGE</a><br>" ;

  
  echo "<a href = 'delete_album.php?delete=$alb_id'>DELETE_ALBUM</a><br>" ; 
  $query = "select *from image_info where image_info.album_id = '$alb_id' " ; 
  $run_query = mysqli_query($db , $query) ; 
  while($row_images = mysqli_fetch_array($run_query)){
        $img = $row_images['image_id'] ;   
		$name = $row_images['image'] ; 
		echo " <a href = 'details.php?detail=$img'> <img src = 'images/$name' width = 300  height = 300 /> </a> " ;
  
  }
?>
</body>












</html> 