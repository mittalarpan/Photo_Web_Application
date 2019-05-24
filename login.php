<!DOCTYPE HTML>


<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>

<html>

<head>
<title>LOGIN</title>
</head>

<body>

<form method = "post" action = "login.php" enctype = "multipart/form-data">
     <table width = "100" height = "100" align = "center" border = "2" bgcolor = "#19BFD1">
     
     <tr>
     <td align = "right" <b>USER_NAME</b> </td> 
     <td> <input type = "text" name = "userName"  /> </td>
     </tr>     

     <tr>
     <td align = "right" <b>PASSWORD</b> </td> 
     <td> <input type = "text" name = "password"  /> </td>
     </tr>
     
     <tr align = "center" >
     <td colspan = "2"> <input type = "submit" name = "login" value = "login"/></td>
     </tr>

</body>




</html>

<?php

if(isset($_POST['login'])){
  
    if(empty($_POST['userName']) OR empty($_POST['password'])){
       
       echo "WRONG USERNAME OR PASSWORD" ;
    
    }
    
    else{
    
      $get = $_POST['userName'] ; 
    
      $query = "select COUNT(*) as cnt from user_data where user_name = '$get'" ;
      $run_query = mysqli_query($db3 , $query) ;   
      $row_ans = mysqli_fetch_array($run_query) ; 

      if($row_ans['cnt'] == 1){
         $query = "select user_id , password from user_data where user_name = '$get'" ; 
         $run_query = mysqli_query($db3 , $query) ; 
         $row_ans = mysqli_fetch_array($run_query) ;
        
         if($row_ans['password'] == $_POST['password']){
            $send  = $row_ans['user_id'] ;  
            $_SESSION['valid']=true ; 
            $_SESSION['timeout'] = time() ; 
            $_SESSION['username'] = $get ; 
            echo "SUCCESSFUL LOGIN <br>" ; 
            echo "<a href = 'album.php?userid=$send'>CLICK FOR HOMEPAGE <br></a>" ;
            echo "<a href = 'logout.php'>LOGOUT</a>" ;             
         }
         else{
           echo "WRONG USERNAME OR PASSWORD" ;
         }
      }
      else{
        echo "WRONG USERNAME OR PASSWORD" ;
      }
    }
}
?>
