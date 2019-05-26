<!DOCTYPE HTML>

<?php
$db3 = mysqli_connect("localhost" , "root" ,"" , "user_info") ;

?>

<html>


<?php

 if(isset($_GET['userid'])){
    $user_id = $_GET['userid'] ; 
	$query = "select *from user_data where user_id='$user_id'" ;
    $run_query = mysqli_query($db3 , $query) ;
    
    while($row_ans = mysqli_fetch_array($run_query)){
	
	    $first_name=$row_ans['first_name'] ; 
		$last_name = $row_ans['last_name'] ; 
        $user_name = $row_ans['user_name'] ; 
        $gender = $row_ans['gender'] ; 
        echo  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

	   <div class='card' style='width: 170rem;'>
       <ul class='list-group list-group-flush'>
       <li class='list-group-item' style='font-size:35px';><b>First name</b> : $first_name</li>
       <li class='list-group-item' style='font-size:35px';><b>Last name</b> : $last_name</li>
       <li class='list-group-item' style='font-size:35px';><b>User name </b>: $user_name</li>
	   <li class='list-group-item' style='font-size:35px';><b>Gender </b>: $gender</li>
       </ul>
       </div>" ;  		
	}		
 }

?>


</html>