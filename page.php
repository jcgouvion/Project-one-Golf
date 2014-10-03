<?php
include_once 'config/constants.php';
include_once 'config/database.php';

$page_id = (int)$_GET['id'];
$page_info = 'SELECT * FROM `pages` WHERE id=' . $page_id;

 $result = mysql_query($page_info);
	if (mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_assoc($result)) {
			$title = $row['title'];
			$content = $row['content'];
		}
	}

?>

<?php include("php template/header.php"); ?>
				
				
<?php include("php template/nav.php"); ?>
				<?php 
				echo $content;
				?>			
				
								
								
															
						
															
															
															
															
															
	<? include("php template/footer.php"); ?>	
	
