<?php
	$date=addslashes(trim($_POST['yearNew']).'-'.trim($_POST['monthNew']).'-'.trim($_POST['dayNew']));
	$time=addslashes(trim($_POST['timeNew']));
	$title=addslashes(trim($_POST['title']));
	$content=addslashes(trim($_POST['content']));
	$language=addslashes(trim($_POST['lang']));				
	
	include_once($_SERVER['DOCUMENT_ROOT']."/PHP/interactionDB.php");
	connect();	
		
	$query='UPDATE news SET dateNew=\''.$date.'\',timeNew=\''.$time.'\',title=\''.$title.'\',language=\''.$language.'\',content=\''.$content.'\' WHERE idNew=\''.$_GET['idNew'].'\'';

	modifyDB($query);
	echo '<script language="javascript" type="text/javascript">window.location="./news.php?lang="'.$language.'"</script>';
?>
