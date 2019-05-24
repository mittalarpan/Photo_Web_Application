<html>
<head> 
<title>Album</title>
</head>

<body>
<h2> <b> OPTIONS </b> </h2>
<br>

<?php

  $id = $_GET['userid'] ; 
  echo "<a href='add_album.php?userid=$id'>ADD ALBUM <br></a>" ;
  echo "<a href='view_album.php?userid=$id'>VIEW ALBUM <br></a>" ;  
?>

<?php




?>

</body>

</html>

