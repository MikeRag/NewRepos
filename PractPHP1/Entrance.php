<?php 
	
	mb_internal_encoding("UTF-8");
	$login = $_POST['_login'];
	$password = $_POST['_password'];
	
	$TryLogin = "kool";
	$TryPassword = "nakool";
		
	if($login == $TryLogin && $password == $TryPassword)
	{
		print "Мои поздравления, вы попали на секретную административную страницу. Вы не можете на ней ничего сделать, но вы сюда попали.";
	}
?>