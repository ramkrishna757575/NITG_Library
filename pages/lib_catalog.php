<?php $active_page="lib_catalog";?>
<?php include_once "../functions/db_functions.php"; ?>
<!doctype html>
<html lang="en">
<head>
	<link href="../bootstrap/icheck/skins/flat/blue.css" rel="stylesheet">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once "../page_components/css_links.php"; ?>
	<title>Catalog</title>	
</head>
<body>
	<?php include_once "../page_components/header.php"; ?>
	<div class="container">
		<?php include_once "../page_components/login_modal.php"; ?>
		<?php include_once "../page_components/register_modal.php"; ?>
		<div class="sidebar">
			<div class="modal-content">
				<?php include_once "../page_components/sidebar.php"; ?>
			</div>			
		</div>				
	</div>
	
	<div id="fetched_books">
		<?php include_once "../functions/db_fetch_books.php"; ?>
	</div>		
	<?php include_once "../page_components/js_links.php"; ?>
</body>
</html>