<?php

function defineLanguage($language){
	if ($language == "es")
		include("/Languages/es.php");
	else if ($language == "fr")
		include("/Languages/fr.php");
	else{
		include("/Languages/en.php");
	}
}
		
?>