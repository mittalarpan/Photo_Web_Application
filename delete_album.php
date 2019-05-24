
<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;
$db2 = mysqli_connect("localhost" , "root" ,"" , "db_images") ;
?>


<html>

<body>

<?php
  
   $alb_id = $_GET['delete'] ; 
   $query = "delete from album_name where album_id = '$alb_id' " ; 
   $run_query = mysqli_query($db , $query) ; 
   
   $query = "delete from image_info where album_id = '$alb_id'" ;
   $run_query = mysqli_query($db2 , $query) ;    

?>


</body>


</html> 