<?

function connect(){
	@ $db=mysql_pconnect('db406791286.db.1and1.com','dbo406791286','q99koJrv***+++');
	if (!$db){ 
		echo '<br>Error: Connection to database failed. Try again later<br>';
	}
		mysql_select_db('db406791286');
}

function modifyDB($query){
	$results=mysql_query($query);
	if (!empty($results)){
		?><script language="javascript" type="text/javascript">
			window.close();
		</script><?php
	}else{	
		?><script language="javascript" type="text/javascript">
			alert('It could not modify the database. Try again later');
			window.history.back();
		</script><?php
	}
}

?>