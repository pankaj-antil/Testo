
<?php
   $conn =  mysqli_connect("localhost", "root","anupam","user");
   $name=$_POST['name'];
   $username=$_POST['username'];
   $password=$_POST['password'];
  
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
    $sql = "SELECT name FROM user_details where email='$username' and password='$password'";
  
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
			 die('Could not get data: ' . mysqli_error($conn));
   }
   
     if($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
	   echo "{$row['name']}";
   }

  else  { 
        $sql2 = "INSERT INTO user_details (name,email,password) VALUES ('$name', '$username','$password' )";
         $retval2 = mysqli_query( $conn,$sql2 );
   
         if(! $retval2 ) {
                die('Could not enter data: ' . mysqli_error($conn));
                         }
			else 
             echo "$name";
 }
   
   mysqli_close($conn);
?>
