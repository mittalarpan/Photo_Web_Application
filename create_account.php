<!DOCTYPE HTML>

<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>

<html>
<head>
<title>create account</title>
</head>

<body>

<form method = "post" action = "create_account.php" enctype = "multipart/form-data">

   <table width = "100" height = "100" align = "center" border = "2" bgcolor = "#19BFD1">
     
     <tr>
     <td align = "right" <b>USER_NAME</b> </td> 
     <td> <input type = "text" name = "userName"  /> </td>
     </tr>     

     <tr>
     <td align = "right" <b>PASSWORD</b> </td> 
     <td> <input type = "password" name = "password"  /> </td>
     </tr>
     
     <tr>
     <td align = "right" <b>FIRST_NAME</b> </td> 
     <td> <input type = "text" name = "firstName"  /> </td>
     </tr>
     
     <tr>
     <td align = "right" <b>LAST_NAME</b> </td> 
     <td> <input type = "text" name = "lastName"  /> </td>
     </tr>
     
     <tr>
     <td align = "right" <b>GENDER</b> </td> 
     <td> <input type = "text" name = "gender"  /> </td>
     </tr>
     
     <tr>
     <td align = "right" <b>PROFILE_IMAGE </b> </td> 
     <td> <input type = "file" name = "img"  /> </td>
     </tr>
     
     <tr align = "center" >
     <td colspan = "2"> <input type = "submit" name = "insert_info" value = "create"/></td>
     </tr>
     
</body>

</html>

<?php
 
if(isset($_POST['insert_info'])){
   
    $username = $_POST['userName'] ; 
    $password = $_POST['password'] ;      
    $firstname = $_POST['firstName'] ; 
    $lastname = $_POST['lastName'] ; 
    $gender = $_POST['gender'] ; 
    
    $query = "insert into user_data(user_name , password , first_name , last_name , gender) values('$username' , '$password' , '$firstname' , '$lastname' , '$gender')" ;
    $run_query = mysqli_query($db3 , $query) ; 
}


?>
