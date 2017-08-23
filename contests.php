<!DOCTYPE html>

<html>

<head>
<title>Contests</title>
<link rel="stylesheet" type="text/css" href="css/contests.css">

</head>
<body>
<div id="header">
<img src="img/rsz_1testo.png" alt="Testo Icon" class="logo">
<button id="user";type="button";onclick="showdropdown()">Sahil56</button>
<button id="upload_button";type="button">Upload Quiz</button>
</div>
<div id="main">
<script>
 function load(contest_i,topic){
	 url3='contests.php?topic='+topic+'&contest='+contest_i;
					window.location.href=url3;
 }

</script>
	
	<?php
	
	$topic_id=$_GET['topic'];
	//$contest_id=$_GET['contest'];
	 $conn =  mysqli_connect("localhost", "root","anupam","user");
 	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
	
		$sql="SELECT * from contests where topic_id=$topic_id";
	
	 $retval = mysqli_query( $conn,$sql );
		   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
		   }
		   if($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			   $contest_id=$row['contest_id'];
			   $contest_name=$row['contest_name'];
		   }
	
		   		   
		   $sql2="SELECT topic_name from topics where topic_id=$topic_id";
		    $retval2 = mysqli_query( $conn,$sql2 );
		   if(! $retval2 ) {
      die('Could not get data: ' . mysqli_error($conn));
		   }
		   if($row2=mysqli_fetch_array($retval2, MYSQLI_ASSOC)){
			   $topic_name=$row2['topic_name'];
		   }
	 
	mysqli_close($conn);
	?>


<?php
echo "<p><font>All Topics</font> &#62; <font>".$topic_name."</font> &#62; <font>".$contest_name."</font></p>";
?>

<hr id="afteroptions">
<div id="content">

<div id="navigation">
<?php

$topic_id=$_GET['topic'];
	 $conn =  mysqli_connect("localhost", "root","anupam","user");
 	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
           }
	$sql="SELECT * from contests where topic_id=$topic_id";
	
	 $retval = mysqli_query( $conn,$sql );
		   if(! $retval ) {
                die('Could not get data: ' . mysqli_error($conn));
		      }
	 while($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
				$contest_i=$row['contest_id'];
			   $contest_name=$row['contest_name'];
			   echo"<div class='contest_name' type='button' >".$contest_name."</div>";
		   }
	

?>
</div>

<form action="calculate.php" method="POST">
<div id="partition">
<div id="problems">

<?php

 $conn =  mysqli_connect("localhost", "root","anupam","user");
 	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
	     
	       $sql= "select * from question where contest_id=$contest_id";
		  $retval = mysqli_query( $conn,$sql );
		   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
	 
	 
	$i=1;
   while($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
	  // echo "{$row['name']}";
	   $que=$row['que'];
	   $opt_one=$row['opt_one'];
	   $opt_two=$row['opt_two'];
	   $opt_three=$row['opt_three'];
	   $opt_four=$row['opt_four'];
   
echo "<div class='question'>Q". $i.".".$que ."?</div>";
echo "<div class='option'>A.<input type='radio' name=".$i." value='a'>". $opt_one."</div>";
echo"<div class='option right'>B.<input type='radio' name=".$i." value='b'>". $opt_two."</div>";
echo"<div class='option'>C.<input type='radio'name=".$i." value='c'>". $opt_three."</div>";
echo"<div class='option right'>D.<input type='radio' name=".$i."value='d'> ".$opt_four."</div>";
 echo "<hr>";
 $i++;

	  }
	  
?>
</div>
<button class="normal" id="next";type="button">Submit Quiz</button>
</div>
</form>
</div>
</div>
<div >

</div>
</body>

</html>