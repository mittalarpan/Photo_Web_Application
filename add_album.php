
<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;

?>

<html>
<head>
<title>ADD ALBUM</title>
</head>

<body>

<form method = "post" action = "add_album.php" enctype = "multipart/form-data">

   <table width = "100" height = "100" align = "center" border = "2" bgcolor = "#19BFD1">
     
	 <tr>
     <td align = "right" <b>ALBUM_NAME</b> </td> 
	 <td> <input type = "text" name = "albumName"  /> </td>
	 </tr>	 
	 
     <tr align = "center" >
	 <td colspan = "2"> <input type = "submit" name = "getAlbum" value = "submitAlbum"/></td>
	 </tr>

<?php
 
 if(isset($_POST['getAlbum'])){
    
	$album_name = $_POST['albumName'] ; 
	 
	$query = "insert into album_name(name) values('$album_name')" ; 
    $run_query = mysqli_query($db , $query) ;  
 }

?>


</body>

</html>
