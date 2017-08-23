
<html>
<head>
</head>
<body>
<script>window.alert("Hello");</script>
<?php
	
  
   $conn =  mysqli_connect("localhost", "root","anupam","user");
      $name=$_POST['name'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "INSERT INTO user_details (name,email,password) VALUES ('$name', '$username','$password' )";
      
  
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Duplicate data');
	  
   }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
?>
</body>
</html>