<?php
$db = mysqli_connect("localhost" , "root" ,"" , "db_images") ;
?>

<html>
<head>
<title>DETAILS</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'> 

</head>

<body>
<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 


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
       echo  
	   "<div class='card' style='width: 18rem;'>
       <ul class='list-group list-group-flush'>
       <li class='list-group-item'><b>Image name</b> : $img_name</li>
       <li class='list-group-item'><b>Image creation date</b> : $img_date</li>
       <li class='list-group-item'><b>Image description </b>: $img_desc</li>
       </ul>
       </div>" ; 	   
	   //echo " <b>Image_name</b> = $img_name <br><br> <b>Image_description = </b> $img_desc <br><br> <b>Image_date_and_time = </b>$img_date " ;
	}
	
	 echo " 
     <div class='list-group'> 
	 <a href='details.php?details=$chk' class='list-group-item list-group-item-action'><b>DELETE_IMAGE</b> </a><br>
     
     </div>
	 ";
	 
    //echo " <br> <a href = 'details.php?details=$chk'>DELETE</a> <br> " ;  
    	
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