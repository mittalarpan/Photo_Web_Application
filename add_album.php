
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
	 
	 <tr>
     <td align = "right" <b>ALBUM_DESCRIPTION</b> </td> 
	 <td> <input type = "text" name = "alb_desc"  /> </td>
	 </tr>
	 
	 <tr>
     <td> <input type = "hidden" name = "user_id" value = <?php if(isset($_GET['userid'])){ echo $_GET['userid'] ; }  ?> /> </td>
     </tr>
	 
     <tr align = "center" >
	 <td colspan = "2"> <input type = "submit" name = "getAlbum" value = "submitAlbum"/></td>
	 </tr>

<?php
 
 if(isset($_POST['getAlbum'])){
    
	$album_name = $_POST['albumName'] ; 
	$alb_desc = $_POST['alb_desc'] ;  
	$userid = $_POST['user_id'] ; 
	$query = "insert into album_name(name , description , date , user_id) values('$album_name' , '$alb_desc' , NOW() , '$userid')" ; 
    $run_query = mysqli_query($db , $query) ;  
 }

?>


</body>

</html>
