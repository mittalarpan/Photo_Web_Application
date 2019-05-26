<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;

?>

<html>
<head>
<title>ADD ALBUM</title>
</head>

<body>
<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 

<br><br>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method = "post" action = "add_album.php" enctype = "multipart/form-data">
  <div class="form-group">
    <label for="ALBUM_NAME">ALBUM NAME</label>
    <input type="text" name="albumName" class="form-control" id="albumName" placeholder="Enter Album Name">
  </div>
  <div class="form-group">
    <label for="ALBUM_DESC">ALBUM DESC</label>
    <input type="text" name = "alb_desc" class="form-control" id="alb_desc" placeholder="Description">
  </div>
   
  <div class="form-group">
    <label for=""></label>
    <input type="hidden" name = "user_id" class="form-control" id="user_id" value = <?php if(isset($_GET['userid'])){ echo $_GET['userid'] ;  } ?> placeholder="">
  </div>
  
  <button type="submit" name="getAlbum" class="btn btn-primary">Submit</button>
  </form>

<?php
 
 if(isset($_POST['getAlbum'])){
    
    $album_name = $_POST['albumName'] ; 
    $alb_desc = $_POST['alb_desc'] ;  
    $userid = $_POST['user_id'] ; 
    $query = "insert into album_name(name , description , date , user_id) values('$album_name' , '$alb_desc' , NOW() , '$userid')" ; 
    $run_query = mysqli_query($db , $query) ;
    echo $userid ;     
    header("Refresh: 2;URL=album.php?userid=$userid") ;
 }

?>


</body>

</html>