<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;
$db2 = mysqli_connect("localhost" , "root" ,"" , "albums") ;
?>

<html>
<head>
<title>album</title> 
</head> 
<body>

<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 


<h2> <b> PHOTOS OF THE ALBUM </b> </h2> 

<?php
   
    
  $alb_id = $_GET['id'] ;
  $query = "select *from album_name where album_id = '$alb_id'" ; 
  $run_query = mysqli_query($db2 , $query) ;  
  while($row_images = mysqli_fetch_array($run_query)){
        $album_name = $row_images['name'] ;   
        $date = $row_images['date'] ;
        $desc = $row_images['description'] ;    
                
        echo  "<div class='card' style='width: 18rem;'>
       <ul class='list-group list-group-flush'>
       <li class='list-group-item'><b>Album name</b> : $album_name</li>
       <li class='list-group-item'><b>Album creation date</b> : $date</li>
       <li class='list-group-item'><b>Album description </b>: $desc</li>
       </ul>
       </div>" ;
  
}
  
  echo " 
  <div class='list-group'>

  <a href='insert_image.php?insert=$alb_id' class='list-group-item list-group-item-action'><b>INSERT_IMAGE</b> </a><br>
  <a href='delete_album.php?delete=$alb_id' class='list-group-item list-group-item-action'><b>DELETE_ALBUM </b></a>

  </div>

";
  
  $query = "select *from image_info where image_info.album_id = '$alb_id' " ; 
  $run_query = mysqli_query($db , $query) ; 
  echo "<div style = 'display: flex;flex-wrap: wrap;'>";
  while($row_images = mysqli_fetch_array($run_query)){
        $img = $row_images['image_id'] ;   
        $name = $row_images['image'] ; 
        echo
       "
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
       <div style = 'flex: 0 0 33.33%;'>
       <div class='card' style='width: 18rem;'>
       <img class='card-img-top' src='images/$name' alt='Album photo'>
       <div class='card-body'>
    
       <a href='details.php?detail=$img' class='btn btn-primary'>Image Details</a>
       </div>
       </div>
       </div>
       " ; 
  
 }
  echo "</div>";
?>
</body>

</html>