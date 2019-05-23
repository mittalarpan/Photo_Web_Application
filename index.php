
<?php
include('functions.php') ; 
?>

<html>
<head>
<title>Photo App</title>
</head>

<body>

<b>OPTIONS</b>
<br>

<a href = "index.php?insert_image">Insert New Image</a>
<br>
<a href = "index.php?view_images">View Images</a>
<br>



<?php
 
if(isset($_GET['insert_image'])){
	include('insert_image.php');  
}

if(isset($_GET['view_images'])){
  view_images() ; 
}

?>





</body>


</html>