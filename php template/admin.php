<!DOCTYPE html>
<html>
	<head>
		<style>
			
		</style>
	</head>
	<body>
		<?php
    $link = mysql_connect("localhost", "root", "root");
	mysql_select_db("Golf");
	if($link === false){die("Error: Could not connect. " . mysql_connect_error());}
	$sql = "SELECT * FROM pages";
	if($result = mysql_query( $sql)){
		if(mysql_num_rows($result) > 0){
			
			
			
			
		while($row = mysql_fetch_assoc($result)) {
			/*
			 * $row = array(
			 * 	'id' => 1,
			 * 	'title' => 'adsf',
			 * 	'content' => 'blahh'
			 * );
			 * <a href="contact.html">Contact</a>
			 */
			echo '<a href="admin_update_form.php?id='.$row['id'].'">'.$row['title'].'</a></br>';
		}
		
			
		}
	}
	
	
	 
	
	

	
	
?>

	</body>
</html>


