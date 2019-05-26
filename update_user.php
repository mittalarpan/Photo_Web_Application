<!DOCTYPE HTML>

<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>
<html>

<body>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method = "post" action = "update_user.php" enctype = "multipart/form-data">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter gender">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name = "password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for=""></label>
    <input type="hidden" name = "user_id" class="form-control" id="user_id" value = <?php if(isset($_GET['userid'])){ echo $_GET['userid'] ;  } ?> placeholder="">
  </div>
  <button type="submit" name="change" class="btn btn-primary">Submit</button>
  </form>

</body>
</html>

<?php

if(isset($_POST['change'])){
$user_id = $_POST['user_id'] ; 

if(isset($_POST['firstName']) AND !empty($_POST['firstName'])){
  $first_name = $_POST['firstName'] ;
  $query = "UPDATE user_data SET first_name = '$first_name' where user_id='$user_id'" ; 
  $run_query = mysqli_query($db3 , $query) ; 
  header("Refresh: 2;URL=user.php?") ;
}
if(isset($_POST['lastName']) AND !empty($_POST['lastName'])){
  $last_name = $_POST['lastName'] ;
  $query = "UPDATE user_data SET last_name = '$last_name' where user_id='$user_id'" ; 
  $run_query = mysqli_query($db3 , $query) ; 
  header("Refresh: 2;URL=user.php?") ;
}
if(isset($_POST['password']) AND !empty($_POST['password'])){
  $password = $_POST['password'] ;
  $query = "UPDATE user_data SET password = '$password' where user_id='$user_id'" ; 
  $run_query = mysqli_query($db3 , $query) ; 
  header("Refresh: 2;URL=user.php?") ;
}
if(isset($_POST['gender']) AND !empty($_POST['gender'])){
  $gender = $_POST['gender'] ;
  $query = "UPDATE user_data SET gender = '$gender' where user_id='$user_id'" ; 
  $run_query = mysqli_query($db3 , $query) ; 
  header("Refresh: 2;URL=user.php?") ;
}
}
?>
