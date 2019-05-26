<!DOCTYPE HTML>


<html>
<head> 
<title>Album</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 



<?php
  
  echo "<h2> <b> OPTIONS </b> </h2>" ; 
  echo "<br>" ; 
  if(isset($_GET['userid'])){
    $id = $_GET['userid'] ; 
    
 
   
echo "
<div class='list-group'>

  <a href='add_album.php?userid=$id' class='list-group-item list-group-item-action'>ADD ALBUM </a>
  <a href='view_album.php?userid=$id' class='list-group-item list-group-item-action'>VIEW ALBUM </a>

</div>

";
 

  }
?>

<?php




?>

</body>

</html>

