<!DOCTYPE HTML>

<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;

?>


</html>
<head>
<title>Inserting Image </title>
</head>

<body>


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
	
     <tr align = "center" >
	 <td colspan = "2"> <input type = "submit" name = "insert_image" value = "insert image"/></td>
	 </tr>
	 
<?php
  
  if(isset($_POST['insert_image'])){
    
	$image_name = $_FILES['img']['name'] ;
    $temp_name = $_FILES['img']['tmp_name'] ; 
    $img_desc = $_POST['img_desc'] ;  
	$alb_name = $_POST['alb_name'] ; 
    move_uploaded_file($temp_name , "images/$image_name") ;
    
    $query = "insert into image_info(image , Date , description , name) values('$image_name' , NOW() , '$img_desc', '$alb_name')" ; 
     
    $run_query = mysqli_query($db , $query) ; 
     	
   }
  
?>






</body>


</html>