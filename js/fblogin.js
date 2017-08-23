
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1828907490680435',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
 /*  FB.getLoginStatus(function (response){
		if(response.status==='connected'){
				document.getElementById('log').innerHTML='Logged in';
				
		}
		else if(response.status==='not_authorized'){
				document.getElementById('log').innerHTML='Not Authorized';
		}
	else{
			document.getElementById('log').innerHTML='Please login to your facebook';
	}
   });*/
   
   function login(){
		FB.login(function(response){
				if(response.status==='connected'){
				document.getElementById('log').innerHTML='Logged in';
				getInfo();
		}
		else if(response.status==='not_authorized'){
				document.getElementById('log').innerHTML='Not Authorized';
		}
	else{
			document.getElementById('log').innerHTML='Please login to your facebook';
	}
				
		}, {scope: 'email'});
		
		
		
   }
   
   function getInfo() {
	   var name;
	   var username;
	   var passwd;
			FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email'}, function(response) {
				
				 name=response.name;
		 username=response.email;
         passwd=response.id
		 document.getElementById('log').innerHTML =passwd;
		 var hr=new XMLHttpRequest();

		var url="signup_fb.php";
						

		
		
		var vars="name="+name+"&username="+username+"&password="+passwd;

          hr.open("POST",url,true);
		  				

		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		document.getElementById("ajaxDiv").innerHTML="processing.....................";	
		
		hr.onreadystatechange = function(){
				if(hr.readyState==4 && hr.status==200){
					var return_data=hr.responseText;
					if(return_data!='wrong'){
					url3='home.php?username='+return_data;
					window.location.href=url3;
					}
					document.getElementById("ajaxDiv").innerHTML=return_data;
				}
		}
		hr.send(vars);
			});
				
		}
