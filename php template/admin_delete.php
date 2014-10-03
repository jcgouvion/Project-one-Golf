<!DOCTYPE html>
<html>
	<head>
		<?php
			
	
	$link = mysql_connect("localhost", "root", "root");
	mysql_select_db("Golf");
	if ($link === false) {die("Error: Could not connect. " . mysql_connect_error());
	}

	if (isset($_POST['delete_title'])) {
		
	

	$query = 'DELETE FROM pages
	
	 WHERE
		id = '.$_POST['delete_title'];
		mysql_query($query);
	}	
	
?>
		
		
	</head>
	<body>
		
    <form method="post">
			
			<input type="text" name="delete_title">
			
				
				
				<button type="submit">
					Delete
				</button>
		</form>

	</body>
</html>




