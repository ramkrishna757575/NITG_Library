function setPlaceholder(){
	var elm = document.getElementById('user_type');
	if(elm.options[elm.selectedIndex].value == "student")
	{
		document.getElementById("roll_no1").placeholder = "Institute provided Roll Number";
	}
	else if(elm.options[elm.selectedIndex].value == "faculty" || elm.options[elm.selectedIndex].value == "librarian")
	{
		document.getElementById("roll_no1").placeholder = "Institute registered Email-Id";
	}

	elm = document.getElementById('user_type1');
	if(elm.options[elm.selectedIndex].value == "student")
	{
		document.getElementById("roll_no2").placeholder = "Institute provided Roll Number";
	}
	else if(elm.options[elm.selectedIndex].value == "faculty" || elm.options[elm.selectedIndex].value == "librarian")
	{
		document.getElementById("roll_no2").placeholder = "Institute registered Email-Id";
	}
}