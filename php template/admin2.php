<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost", "root", "root", "Golf");
		
		if($link === false){die("Error: Could not connect. " .mysqli_connect_error());}
		$sql = "SELECT * FROM pages";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)) {
			echo '<a href="admin_update_form.php?id='.$row['id'].'"> '.$row['title'].'</a></br>';
		}
		}
		}
		?>
	</body>
</html>
	
