<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<script>


function contest( i){
	//var topic=document.getElementById(id).value;
	url3='contests.php?topic='+i;
					window.location.href=url3;					
}
function leaderboard( i){
	//var topic=document.getElementById(id).value;
	url4='leaderboard.php?topic='+i;
					window.location.href=url4;					
}

</script>
</head>
<body>

<div id="header">
<img src="img/rsz_1testo.png" alt="Testo Icon" class="logo">
<?php if(!isset($_GET['username'])){?>
<a href="login.html"><button id="login_button";type="button">Login</button></a>
<a href="signup.html"><button id="signup_button";type="button">Register</button></a>
<?php }else {?>
<a style="float:right;margin-top:60px;margin-right:90px;";href="">Hi! <?php echo $_GET['username'];?></a>
<a href="home.php"><button id="signup_button";type="button">Log Out</button></a>
<?php }?>
<a href="upload.php"><button id="upload_button";type="button">Upload Quiz</button></a>
</div>
<div id="main">
<p>All Topics</p>
<hr>
<div id="content">
<div class="container">
<div class="tile left">C
<button class="attempt";type="button" id="ca" onclick="contest(1)" value="1">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(1)">Leaderboard</button>
</div>
<div class="tile">C++
<button class="attempt";type="button" id="cpa" onclick="contest(2)" value="2">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(2)">Leaderboard</button>
</div>
<div class="tile right">Java
<button class="attempt";type="button" id="ja" onclick="contest(3)" value="3">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(3)">Leaderboard</button>
</div>
</div>
<div class="container">
<div class="tile left">Python
<button class="attempt";type="button" id="pa" onclick="contest(4)" value="4">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(4)">Leaderboard</button>
</div>
<div class="tile">Php
<button class="attempt";type="button" id="pha" onclick="contest(5)" value="5">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(5)">Leaderboard</button>
</div>
<div class="tile right">Sql
<button class="attempt";type="button" id="sqla" onclick="contest(6)" value="6">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(6)">Leaderboard</button>
</div>
</div>
<div class="container">
<div class="tile left">Android
<button class="attempt";type="button" id="andra" onclick="contest(7)" value="7">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(7)">Leaderboard</button>
</div>
<div class="tile">Ajax
<button class="attempt";type="button" id="aja" onclick="contest(8)" value="8">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(8)">Leaderboard</button>
</div>
<div class="tile right">Ruby
<button class="attempt";type="button" id="ruba" onclick="contest(9)" value="9">Attempt</button>
<button class="leaderboard";type="button" onclick="leaderboard(9)">Leaderboard</button>
</div>
</div>
</div>
</div>
</body>
</html>
