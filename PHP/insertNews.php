<?php
	$menu=addslashes(trim($_GET['type']));
	$idNew=addslashes(trim($_POST['idNew']));
	$date=addslashes(trim($_POST['yearNew']).'-'.trim($_POST['monthNew']).'-'.trim($_POST['dayNew']));
	$time=addslashes(trim($_POST['timeNew']));
	$language=addslashes(trim($_POST['language']));				
	$title=addslashes(trim($_POST['title']));	
	$content=addslashes(trim($_POST['content']));
	$language=addslashes(trim($_POST['lang']));	
	
	include_once($_SERVER['DOCUMENT_ROOT']."/PHP/interactionDB.php");
	connect();	
		
	$query='INSERT news VALUES (\''.$idNew.'\',\''.$date.'\',\''.$time.'\',\''.$language.'\',\''.$title.'\',\''.$content.'\')';

	modifyDB($query);
	
	if ($menu=="designer")
		echo '<script language="javascript" type="text/javascript">window.location="../Designer/news.php?lang="'.$language.'"</script>';
	else
		echo '<script language="javascript" type="text/javascript">window.location="../Administration/news.php?lang="'.$language.'"</script>';
?>
