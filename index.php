<?php
const APPID ="1417569068549934";
const APPSECRET = "027ef6af87b24d8c717c3edafa837e93"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF8-8">
		<title>Titre de ma page</title> 

	</head>

	<body>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1417569068549934',
		      xfbml      : true,
		      version    : 'v2.3'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
   

	</body>
</html>