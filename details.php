<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;
?>

<html>
<head>
<title>DETAILS</title>
</head>

<body>

<?php
 if(isset($_GET['detail'])){
    global $db ; 
	$chk = $_GET['detail'] ; 
	$query = "select *from image_info where image_id = '$chk'" ;
    $run_query =  mysqli_query($db , $query) ; 
    while($row_ans = mysqli_fetch_array($run_query)){
	   $img_name = $row_ans['image'] ; 
	   $img_desc = $row_ans['description'] ;
       $img_date = $row_ans['Date'] ; 	   
	   echo " <b>Image_name</b> = $img_name <br><br> <b>Image_description = </b> $img_desc <br><br> <b>Image_date_and_time = </b>$img_date " ;
	}
    echo " <br> <a href = 'details.php?details=$chk'>DELETE</a> <br> " ;  
    	
 }

?>



</body>



</html>

<?php
if(isset($_GET['details'])){
   global $db ; 
   $chk = $_GET['details'] ; 
   $query = "delete from image_info where image_id = '$chk'" ; 
   $run_query = mysqli_query($db , $query) ; 
 
}
?>