(function(){
	var elem = document.getElementById("search_form");
	var output = document.getElementById("fetched_books");
	elem.onsubmit = function data_fetch(){
		var myCheckboxes = new Array();
		var searchBook = document.getElementById("search_book").value;
        $("input:checkbox[name=search_by]:checked").each(function(){
           myCheckboxes.push($(this).val());
        });

		var url = "../functions/db_fetch_books.php";		
		ajaxLib.ajax(url,{
			method: "POST",
			data: {
				search_by: myCheckboxes,
				inp_search: searchBook
			},
			before: function(){
				output.innerHTML = "<p>Searching Books...</p>";
			},
			complete: function(response){
				output.innerHTML = response;
			}
		});
		return false;
	};
})();