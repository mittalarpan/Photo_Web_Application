<html>
<head> 
<title>Album</title>
</head>

<body>
<h2> <b> OPTIONS </b> </h2>
<br>
<a href = "album.php?insert_image">Insert New Image</a>
<br>
<a href = "album.php?add_album">Add Album</a> 
<br>
<a href = "album.php?view_album">View Album</a> 
<br>

<?php

if(isset($_GET['insert_image'])){
	include('insert_image.php');  
}

if(isset($_GET['add_album'])){
   
   include('add_album.php') ; 
  
}

if(isset($_GET['view_album'])){
	include('view_album.php') ; 
}
?>

</body>

</html>

