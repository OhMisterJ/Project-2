function validation() {
		// The variables below, reach into our index.php file and fills the 'firstName' and 'lastName' variables with the values that the user provides.
	var firstName = document.forms['hotelForm']['firstname'].value;
	var lastName = document.forms['hotelForm']['lastname'].value;

	// This if conditional statement will check our variables firstName and lastName to make sure that they are not empty or null.
	if (firstName == null || firstName == '' || lastName == null || lastname == '') {
		document.querySelector('.notify').textContent = 'Don\'t forget to fill in the required fields!';
		return false;
	}
}
