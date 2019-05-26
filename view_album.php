<?php
$db = mysqli_connect("localhost" , "root" ,"" , "albums") ;
?>

<html>
<head>
<title>View Album</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<p align="right"><a href = 'logout.php'>LOGOUT</a></p> 


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
   
    echo
"<div class='list-group'>

  <a href='album_photos.php?id=$albm_id' class='list-group-item list-group-item-action'>$albm_name</a>
  

</div>

";
 }     
?>

