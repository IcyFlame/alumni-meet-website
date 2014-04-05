function checkFill()
{

	// checks if all the required fields have been filled by the user

	g = document.getElementsByClassName("required");

	for(i = 0; i < g.length; ++i)
	{

		if(g[i].value == '')
		{
			console.log("Form not filled.");
			alert("please fill all the required fields.");
			return true;

		}

	}

	return false;
}

function validateEmail()
{
	// checks if the email ID entered by the user is a correct email ID

	var x=document.getElementById('email');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if (!filter.test(x.value)) {
		alert('Please provide a valid email address');
		return true;
		x.focus;
	}
	return false;
}
function validateURL() {

	// checks if the URL of the website entered by the user is a valid URL

	var url = document.getElementById('website');
	var urlregx = new RegExp("^(http:\/\/www.|https:\/\/www.|ftp:\/\/www.|www.){1}[0-9A-Za-z\.\-]*\.[0-9A-Za-z\.\-]*$");
	if(!urlregx.test(url)){
		alert("Not a valid URL");
		return true;
		url.focus;
	}
	return false;
}

function validateName(){

	// checks if the name contains characters other than alphabets.

	var name = document.getElementById('first-name').value;
	var check = /^[A-Za-z\s]+$/.test(name);
	if(!check){
		alert("Text field not valid");
		return true;
		name.focus;
	}

	return false;
}

function checkPW()
{
	// checks if the 2 passwords entered by the user match

	pw = document.getElementById("password");
	password1 = document.getElementById("password").value;
	password2 = document.getElementById("confirm-password").value;

	if (! (password1 == password2))
	{

		alert("Given passwords do not match.");
		pw.focus();
		return true;

	}

	return false;
}

function checkConfirmEmail()
{

	// checks if the 2 email ID's entered by the user match.

	em = document.getElementById("email");

	em1 = document.getElementById("email").value;
	em2 = document.getElementById("confirm-email").value;

	if (! (em1 == em2))
	{

		alert("Given email IDs do not match.");
		em.focus();
		return true;
	}

	return false;

}


function onSubmit()
{

	// the function that is called when the user enters all the details and presses submit.

	if(checkFill())

		return;

	// confirm password

	if(checkPW())

		return;

	//confirm email

	if(checkConfirmEmail())

		return;

	// name

	if(validateName())

		return;

	// email 

	if(validateEmail())

		return;

	// website

	if(validateURL())

		return;

	document.write("Thank you for filling the form. Your data has been accepted after preliminary data validation.")


}