// contact form
function contactformhash(form, fullname, email, phone, message) {
	var error="";
	if (form.fullname.value == '' || form.email.value == '' || form.phone.value == '' || form.message.value == '') {
		error = "<p class='error'>All fields are required</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
		}
	
	// Check the fullname
    re = /^[a-zA-Z\s]+$/; 
    if(!re.test(form.fullname.value)) {
		error = "<p class='error'>Your fullname must contain only letters.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false; 
    }
	
	// Check that the fullname is sufficiently long (min 6 chars)
    if (form.fullname.value.length < 6) {
		error = "<p class='error'>Your name is too short, must be at least 6 characters long.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	
	// Check that the fullname (max 30 chars)
    if (form.fullname.value.length > 30) {
		error = "<p class='error'>Your fullname is too long, must be under 30 characters.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	
	// Check the email
    re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!re.test(form.email.value)) {
		error = "<p class='error'>Please provide a valid email address</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false; 
    }
	
	// Check the phone
    re = /[^0-9]/g; 
    if(re.test(form.phone.value)) {
		error = "<p class='error'>Your phone or mobile number must contain only digits.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false; 
    }
	
	// Check that the phone is sufficiently long (min 9 chars)
    if (form.phone.value.length < 6) {
		error = "<p class='error'>Your phone or mobile number is too short, must be at least 9 digits long.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	// Check that the phone (max 15 chars)
    if (form.phone.value.length > 15) {
		error = "<p class='error'>Your phone or mobile number is too long, must be under 15 digits.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	
	// Check that the message is sufficiently long (min 20 chars)
    if (form.message.value.length < 20) {
		error = "<p class='error'>Your message is too short, must be at least 20 characters long.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	
	// Check that the message is sufficiently long (min 20 chars)
    if (form.message.value.length > 280) {
		error = "<p class='error'>Your message is too long, must be under 280 characters.</p>";
		document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
	
    // Finally submit the form. 
    form.submit();
	return true;
}