<!DOCTYPE html>
<html>
	<head>
		<?php
			
	
	$link = mysql_connect("localhost", "root", "root");
	mysql_select_db("Golf");
	if ($link === false) {die("Error: Could not connect. " . mysql_connect_error());
	}

	if (isset($_POST['title'])) {
		
	


	
	$insert_query = 'INSERT INTO `pages`(`title`, `content`) VALUES ("'.$_POST['title'].'","'.$_POST['content'].'")';
	
	
	mysql_query($insert_query);
		
	}
?>
		
		
	</head>
	<body>
		
    <form method="post">
			Title:
			<input type="text" name="title"/>
			
				Content:
				<textarea name="content"></textarea>
				<button type="submit">
					Create
				</button>
		</form>

	</body>
</html>