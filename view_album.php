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
 
 $query = "select *from album_name" ; 
 $run_query = mysqli_query($db , $query) ; 
 
 while($row_ans = mysqli_fetch_array($run_query)){
    $albm_name = $row_ans['name'] ;  
	echo "<a href='album_photos.php?name=$albm_name'>$albm_name</a><br>" ; 
 
 }	 
?>






</body>

</html>