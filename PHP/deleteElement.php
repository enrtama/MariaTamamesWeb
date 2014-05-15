<?php	
	include_once($_SERVER['DOCUMENT_ROOT']."/PHP/interactionDB.php");
	connect();	
	
	$menu=$_GET['type'];
	$table=$_GET['table'];
	$primaryKey=$_GET['primaryKey'];
	$value=$_GET['value'];
	$language=addslashes(trim($_POST['lang']));
	
	echo $menu;echo '<br>';	
	echo $table;echo '<br>';
	echo $primaryKey;echo '<br>';
	echo $value;echo '<br>';	
		
	$query='DELETE FROM '.$table.' WHERE '.$primaryKey.'=\''.$value.'\'';
	modifyDB($query);
	
	if (($menu=="designer") && ($table == "news"))
		echo '<script language="javascript" type="text/javascript">window.location="../Designer/news.php?lang="'.$language.'"</script>';
	else if ($table == "news")
		echo '<script language="javascript" type="text/javascript">window.location="../Administration/news.php?lang="'.$language.'"</script>';
		else
			echo '<script language="javascript" type="text/javascript">window.location="../Administration/staff.php?lang="'.$language.'"</script>';
?>