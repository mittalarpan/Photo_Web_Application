<!DOCTYPE HTML>


<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>

<html>

<head>
<title>LOGIN</title>
</head>

<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method = "post" action = "login.php" enctype = "multipart/form-data">
  <div class="form-group">
    <label for="userName">User Name</label>
    <input type="text" name="userName" class="form-control" id="userName" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name = "password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
  </form>


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
            echo "<div class='alert alert-success' role='alert'>
            SUCCESSFUL LOGIN 
           </div>" ; 
            echo "
            <div class='list-group'>
            <a href='user_details.php?userid=$send' class='list-group-item list-group-item-action'><b>USER PROFILE</b></a> 
            <a href='album.php?userid=$send'class='list-group-item list-group-item-action'><b>CLICK FOR HOMEPAGE</b> </a><br>
            <a href='delete_user.php?userid=$send'class='list-group-item list-group-item-action'><b>DELETE ACCOUNT</b> </a><br>
			<a href='logout.php' class='list-group-item list-group-item-action'><b>LOGOUT </b></a>
              
            </div>

            ";
                        
         }
         else{
           echo "<div class='alert alert-danger' role='alert'>
           WRONG USERNAME OR PASSWORD!
           </div>" ;
         }
      }
      else{
        echo "<div class='alert alert-danger' role='alert'>
           WRONG USERNAME OR PASSWORD!
           </div>"  ;
      }
    }
}
?>

