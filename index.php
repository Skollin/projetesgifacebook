<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	

	session_start();
	require "facebook-php-sdk-v4-4.0-dev/autoload.php";
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;

	const APPID ="1417569068549934";
	const APPSECRET = "027ef6af87b24d8c717c3edafa837e93";

	FacebookSession::setDefaultApplication(APPID, APPSECRET);
	$helper = new FacebookRedirectLoginHelper('https://projetesgifacebook.herokuapp.com/');
	$loginUrl = $helper->getLoginUrl();
	

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
		      appId      : '<php echo APPID; ?>',
		      xfbml      : true,
		      version    : 'v2.3'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/fr_FR/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
   		<h1>Ma page</h1>
   		<div
			class="fb-like"
			data-share="true"
			data-width="450"
			data-show-faces="true">
		</div>
		<a href='<?php echo $loginUrl; ?>'> ici </a>
	</body>
</html>