<!DOCTYPE HTML>

<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;

?>


</html>
<head>
<title>Inserting Image </title>
</head>

<body>
<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 



<form method = "post" action = "insert_image.php" enctype = "multipart/form-data">
    
    <table width = "100" height = "100" align = "center" border = "2" bgcolor = "#19BFD1">
    
     <tr align = "center">
     <td colspan = "2"<h1>Insert new Image:</h1></td>
     </tr>
       
       
     <tr>
     <td align = "right" <b>Image </b> </td> 
     <td> <input type = "file" name = "img"  /> </td>
     </tr>
     
     <tr>
     <td align = "right" <b>Description</b> </td> 
     <td> <input type = "text" name = "img_desc"  /> </td>
     </tr>


     <tr>
     <td align = "right" <b>Albun_name</b> </td> 
     <td> <input type = "text" name = "alb_name"  /> </td>
     </tr>
     
     <tr>
     <td> <input type = "hidden" name = "albm_id" value = <?php if(isset($_GET['insert'])){ echo $_GET['insert'] ; }  ?> /> </td>
     </tr>     
     <tr align = "center" >
     <td colspan = "2"> <input type = "submit" name = "insert_image" value = "insert image"/></td>
     </tr>
     
<?php
  
  if(isset($_POST['insert_image'])){
    global $alb_id ; 
    $image_name = $_FILES['img']['name'] ;
    $temp_name = $_FILES['img']['tmp_name'] ; 
    $img_desc = $_POST['img_desc'] ;  
    $alb_name = $_POST['alb_name'] ;
    $al_id     = $_POST['albm_id'] ; 
    move_uploaded_file($temp_name , "images/$image_name") ;
    $query = "insert into image_info(image , Date , description , name , album_id) values('$image_name' , NOW() , '$img_desc', '$alb_name' , '$al_id')" ; 
     
    $run_query = mysqli_query($db , $query) ; 
<<<<<<< HEAD
    header("Refresh: 2;URL=album_photos.php?id=$al_id") ;     
=======
         
>>>>>>> 6bca8888ab4dcc99b45528cc113a5508ed495d59
   }
  
?>






</body>


</html>
