<html>
<head></head>
<body>
<h2>Here we go...</p>
</hr>
<div class="verticalLine" style>
<script>
window.onload = function () {
    var url = window.location.href,
        params = url.split('?')[1].split('&'),
        data = {}, tmp;
    for (var i = 0, l = params.length; i < l; i++) {
         tmp = params[i].split('=');
         data[tmp[0]] = tmp[1];
    }	
}
</script>
<style>
.verticalLine {
    border-left: thick solid #ff0000;
}
</style>


<?php


 $conn =  mysqli_connect("localhost", "root","anupam","user");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
      $sql = "SELECT * FROM questions where que_id=data.count";
	   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   while($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
   
	   echo '<p>'.$row['que_id']. $row['que'].'</p>';
	   
   }



?>
</div>

</body>


</html>