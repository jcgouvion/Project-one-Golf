<!DOCTYPE html>
<html>
	<head>
		<style>
		</style>
	</head>
	<?php
	$page_id = $_GET['id'];
	$link = mysql_connect("localhost", "root", "root");
	mysql_select_db("Golf");
	if ($link === false) {die("Error: Could not connect. " . mysql_connect_error());
	}

	if (isset($_POST['title'])) {
		$sql = update;
	}

	$query = 'UPDATE `pages`
	 SET  
	 `title` = "' . addslashes($_POST['title']) . '",
	 `content` = "' . addslashes($_POST['content']) . '"
	 WHERE
		`id` = ' . $page_id;
		mysql_query($query);
?>

	<?php
	$query_select = "SELECT * FROM `pages` WHERE id =" . $_GET['id'];
	$res = mysql_query($query_select);

	$array = array();

	while ($row = mysql_fetch_assoc($res)) {
	$array = $row;
		
	}
	?>
	

	

	
	
	
	
	

	<body>
		<form method="post">
			Title:
			<input type="text" name="title" value="<?php echo $array['title']; ?>" />
			<br\>
				Content:
				<textarea name="content"><?php echo $array['content'];?></textarea>
				<button type="submit">
					Save
				</button>
		</form>
	</body>
</html>

