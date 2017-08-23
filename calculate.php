<html>

<?php
$conn =  mysqli_connect("localhost", "root","anupam","user");

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $contest_id=1;//$_POST["contest"];
   $count=0;
   $sql="SELECT correct_opt from question where contest_id=$contest_id";
    $retval = mysqli_query( $conn,$sql );
		   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   for($i=1;$i<=10;$i++){
	   
	 
	 
		  $selected_opt=$_POST[$i];
	  
	   if($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
		   $corr=$row['correct_opt'];
	   }
	  
	   if($corr==$selected_opt){
		   $count++;
	   }
	   
   }
   
   echo"Score is: $count";


?>
</html>