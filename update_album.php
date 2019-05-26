<!DOCTYPE HTML>

<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;
?>

<html>
<head>
<title>update ALBUM</title>
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method = "post" action = "update_album.php" enctype = "multipart/form-data">
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
    <input type="hidden" name = "album_id" class="form-control" id="album_id" value = <?php if(isset($_GET['update'])){ echo $_GET['update'] ;  } ?> placeholder="">
  </div>
  
  <button type="submit" name="please" class="btn btn-primary">Submit</button>
  </form>
<?php     

if(isset($_POST['please'])){
  $album_id = $_POST['album_id'] ;
  echo $album_id ;   
  if(isset($_POST['albumName']) AND !empty($_POST['albumName'])){
    $album_name = $_POST['albumName'] ;
    $query = "UPDATE album_name SET name = '$album_name' where album_id='$album_id'" ; 
    $run_query = mysqli_query($db , $query) ; 
  }
  
  if(isset($_POST['alb_desc']) AND !empty($_POST['alb_desc'])){
    $album_desc = $_POST['alb_desc'] ;
    $query = "UPDATE album_name SET description = '$album_desc' where album_id='$album_id'" ; 
    $run_query = mysqli_query($db , $query) ; 
  }
  
}


?>   
</body>

</html>