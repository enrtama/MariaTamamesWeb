<?php
	$user=addslashes(trim($_POST['user']));
	$password=addslashes(trim($_POST['password']));
	$userType=addslashes(trim($_POST['userType']));		
	$language=addslashes(trim($_POST['lang']));				
	
	include_once($_SERVER['DOCUMENT_ROOT']."/PHP/interactionDB.php");
	connect();	
		
	$query='UPDATE staff SET user=\''.$user.'\',password=\''.$password.'\',userType=\''.$userType.'\' WHERE user=\''.$_GET['user'].'\'';

	modifyDB($query);
	echo '<script language="javascript" type="text/javascript">window.location="./staff.php?lang="'.$language.'"</script>';
?>
