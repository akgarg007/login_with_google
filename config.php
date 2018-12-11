<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("466049624401-kqfr57jt9rdir54rdpu5b7v3d4gtnnok.apps.googleusercontent.com");
	$gClient->setClientSecret("");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/googlelogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
