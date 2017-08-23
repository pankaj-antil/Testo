<?php
    $conn =  mysqli_connect("localhost", "root","anupam","user");
   $username=$_POST['username'];
   $password=$_POST['password'];
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = "SELECT name FROM user_details where email='$username' and password='$password'";
  
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   if($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
	   echo "{$row['name']}";
   }
 else{
	 echo"wrong";
 }
   
   mysqli_close($conn);
?>