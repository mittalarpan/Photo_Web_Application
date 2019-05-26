<!DOCTYPE HTML>

<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>

<html>
<head>
<title>DELETE ACCOUNT</title>

<body>

<?php

if(isset($_GET['userid'])){
  $user_id = $_GET['userid'] ; 	
  $query = "DELETE from user_data where user_id='$user_id'" ; 
  $run_query = mysqli_query($db3,$query) ;    
}
?>

</body>



</html>