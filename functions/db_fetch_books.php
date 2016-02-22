<?php
	include_once "../functions/db_functions.php";	
	$db_server = connect_database();
	include_once "../functions/code_sanitizer.php";
	include_once "../functions/db_manage_table.php";
	$query = "SELECT * FROM books ";
	$query_temp='';
	if(isset($_POST['search_by']) && isset($_POST['inp_search']) && !empty($_POST['search_by']) && !empty($_POST['inp_search']))
	{
		extract($_POST);
		$search_by = explode(',', $search_by);
		foreach($search_by as $value)
		{
			$value=sanitizeMySQL($db_server,$value);
			$query_temp = $query_temp.$value." LIKE '%$inp_search%' or ";
		}
		$query_temp = substr($query_temp,0,strlen($query_temp)-4);
		$query = $query." where ".$query_temp;
	}
	$result = mysqli_query($db_server,$query);
	if(!$result) echo "<p>Database access failed: " . mysqli_error($db_server)."</p>";
	else
	{
		$num_books=mysqli_num_rows($result);
		if($num_books == 0)
		{
			echo '<div class="container less-margin">';
			echo "<div class='row books-row'>";
			echo "<h2>No books found</h2>";
			echo"</div>";
			echo "</div>";
		}
		$num_cols = 4;
		while($num_books > 0)
		{
			$num_books = $num_books - 4;
			if($num_books < 0)
			{
				$num_cols = (mysqli_num_rows($result) % 4);
			}
			echo '<div class="container less-margin">';
			echo "<div class='row books-row'>";
			for($j=1;$j<=$num_cols;$j++)
			{
				$row = mysqli_fetch_row($result);
				echo "
				<div class='col-sm-8 col-md-3 books-card'>
				  	<a href='#' class='books-tiles'>
				    <div class='thumbnail'>
				      	<img src='../img/books/$row[5]' alt='image unavailable' width='55%'>
			      		<div class='caption'>
			       			<h2>$row[6]</h2>
			       			<p>$row[7]</p>
			      		</div>
			    	</div>
			    	</a>
			  	</div>
			";
			}
			$j=0;
			echo"</div>";
			echo "</div>";
		}
	}		
	mysqli_close($db_server);		 
 ?>