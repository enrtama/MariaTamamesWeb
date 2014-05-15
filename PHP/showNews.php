<?php

function showNews(){
	include_once($_SERVER['DOCUMENT_ROOT']."/PHP/interactionDB.php");				
	connect();
	$query='SELECT * FROM news';
	$results=mysql_query($query);
	$numberResults=mysql_num_rows($results);
	
	for($i=0; $i<$numberResults; $i++){
		$row=mysql_fetch_array($results);
		$date=$row['dateNew'];
		$lang=$row['language'];	
		$title=$row['title'];
		$content=$row['content'];	
		
		echo '<table class="tableNews">';
		echo '<tr class="titleNew" ><td>'.$title.'</td></tr>';
		echo '<tr class="dateNew" ><td>'.$date.'</td></tr>';
		echo '<tr class="languageNew"><td>['.$lang.']</td></tr>';
		echo '<tr class="contentNew" ><td>'.$content.'</td></tr>';
		echo '</table><br>';
	}
}

?>