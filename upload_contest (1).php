<?php
	  $conn =  mysqli_connect("localhost", "root","anupam","user");
	  $topic=$_POST["topic"];
	  $contest_id=$_POST["contest"];
	  for($i=1;$i<=10;$i++){
	  $que1=$_POST[$i];
	  $opt1a=$_POST[$i."A"];
	  $opt1b=$_POST[$i."B"];
	  $opt1c=$_POST[$i."C"];
	  $opt1d=$_POST[$i."D"];
	  $corr1=$_POST[$i."q"];
	  
	  
	
	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   $sql = "INSERT INTO question (contest_id,que,opt_one,opt_two,opt_three,opt_four,correct_opt) VALUES ('$contest_id', '$que1','$opt1a','$opt1b','$opt1c','$opt1d','$corr1' )";

    $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Duplicate data');
	  
   }
	  }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);

?>