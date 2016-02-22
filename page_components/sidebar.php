<form action="../functions/db_fetch_books.php" method="POST" id="search_form">
	<div class="modal-header">
		<h3>Search By</h3>
		<ul class="search_cat">
			<div class="row">
				<div class="col-md-6">
					<li><input type="checkbox" name="search_by" value="title" checked> Title</li>
				</div>
				<div class="col-md-6">
					<li><input type="checkbox" name="search_by" value="author"> Author</li>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<li><input type="checkbox" name="search_by" value="publication"> Publication</li>
				</div>
				<div class="col-md-6">
					<li><input type="checkbox" name="search_by" value="isbn"> ISBN</li>
				</div>
			</div>			
		</ul>
		<div class="input-group form-search">
		    <input type="text" class="form-control search-query" name="inp_search" id="search_book">
		    <span class="input-group-btn">
		      <input type="submit" class="btn btn-primary" data-type="last" value="Search" id="search_btn"></input>
		    </span>
	  	</div>
	</div>
</form>
<form action="">
	<div class="modal-header">		
		<h3>Display By Category</h3></li>	
		<hr>
		<ul class="search_cat">
			<div class="row">
				<h4>Book-Type</h4>
				<div class="col-md-6">
					<li><input type="checkbox" name="academic" value="academic" id="academic"> Academic</li>
				</div>
				<div class="col-md-7">
					<li><input type="checkbox" name="academic" value="nonacademic"> Non-Academic</li>
				</div>
			</div>
		</ul>		
		<hr>
		<ul class="search_cat">
			<div class="row">
				<h4>Branch</h4>
				<div class="col-md-6">
					<li><input type="checkbox" name="branch" value="CSE"> CSE</li>
				</div>
				<div class="col-md-6">
					<li><input type="checkbox" name="branch" value="ECE"> ECE</li>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<li><input type="checkbox" name="branch" value="EEE"> EEE</li>
				</div>
			</div>
		</ul>
	</div>
</form>