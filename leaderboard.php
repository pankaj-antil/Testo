<!DOCTYPE html>
<html>
<head>
<title>Laederboard</title>
<link rel="stylesheet" type="text/css" href="css/leaderboard.css">
</head>
<body>
<div id="header">
<img src="img/rsz_1testo.png" alt="Testo Icon" class="logo">
<?php if(isset($_GET['username'])){?>
<a style="float:right;margin-top:60px;margin-right:90px;";href="">Hi! <?php echo $_GET['username'];?></a>
<a href="home.php"><button id="signup_button";type="button">Log Out</button></a>
<?php }else {?>
<a href="login.html"><button id="login_button";type="button">Login</button></a>
<a href="signup.html"><button id="signup_button";type="button">Register</button></a>
<?php }?>
<button id="upload_button";type="button">Upload Quiz</button>
</div>
<div id="main">
<p><font>Leaderboard</font> &#62; <font>
<?php
   $topic_id=$_GET['topic'];
$conn =  mysqli_connect("localhost", "root","anupam","user");
 	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
$sql2="SELECT topic_name from topics where topic_id=$topic_id";
$retval2 = mysqli_query( $conn,$sql2 );
		   if(! $retval2 ) {
      die('Could not get data: ' . mysqli_error($conn));
		   }
		   if($row2=mysqli_fetch_array($retval2, MYSQLI_ASSOC)){
			   $topic_name=$row2['topic_name'];
		   }
echo $topic_name;
?>
</font></p>
<hr id="afteroptions">
<div id="content">
<table style="width:100%">
  <tr>
    <th width="100">Rank</th>
    <th>Username</th> 
    <th width="200">Score</th>
  </tr>
  <?php
	$topic_id=$_GET['topic'];
$conn =  mysqli_connect("localhost", "root","anupam","user");
 	   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   $sql="SELECT * from V3 where topic_id=$topic_id order by score DESC";
   $retval=mysqli_query( $conn,$sql );
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
		   }
		   $count = 1;
  while($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
			   $user_id=$row['user_id'];
			   $user_name=$row['name'];
			   $score=$row['score'];
			   echo "<tr>
    <td width='100'>".$count."</td>
    <td>".$user_name."</td> 
    <td width='200'>".$score."</td>
  </tr>";
  $count=$count+1;
		   }
  
  ?>
</table>
</div>
</div>
</body>
</html>
<?php	mysqli_close($conn);?>