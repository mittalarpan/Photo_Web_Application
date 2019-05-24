<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;

?>

<html>
<head>
<title>View Album</title>
</head>

<body>
<br>
<br>
<br>
<h2><b>CONTENTS</b></h2> 
<?php
 $getid = $_GET['userid'] ; 
 $query = "select *from album_name where user_id=$getid" ; 
 $run_query = mysqli_query($db , $query) ; 
 
 while($row_ans = mysqli_fetch_array($run_query)){
    $albm_name = $row_ans['name'] ;  
	$albm_id  = $row_ans['album_id'] ; 
	echo "<a href='album_photos.php?id=$albm_id'>$albm_name</a><br>" ; 
 
 }	 
?>






</body>

</html>