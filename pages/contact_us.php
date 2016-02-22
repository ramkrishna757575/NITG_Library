<?php $active_page="contactus"; ?>
<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once "../page_components/css_links.php"; ?>
	<title>Contact Us</title>	
</head>
<body>
	<?php include_once "../page_components/header.php"; ?>
	<div class="container">
		<?php include_once "../page_components/login_modal.php"; ?>
		<?php include_once "../page_components/register_modal.php"; ?>
	</div>
	<div class="container">		
		<div class="alert plain-bg contact">
			<ul>
				<li>
					<img src="../img/muneshkumar.png" alt="Image Unavailable">
					<div class="lib_contact">
						<h3>Mr. Munesh Kumar</h3>
						<h4>Assistant Librarian</h4>
						<strong>Email - </strong>asst.librarian@nitgoa.ac.in
						<br><strong>Mobile No. - </strong>9970219639
					</div>
					<div class="clearfix"></div>
				</li>
				<hr>
				<li>
					<img src="" alt="Image Unavailable">
					<div class="lib_contact">
						<h3>Ms. Jyoti Prakash Raikar</h3>
						<h4>Contract Library Assistant</h4>
						<strong>Email - </strong>
						<br><strong>Mobile No. - </strong>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
		</div>	
		<?php include_once "../page_components/feedback.php"; ?>								
	</div>
	<?php include_once "../page_components/js_links.php"; ?>
</body>
</html>