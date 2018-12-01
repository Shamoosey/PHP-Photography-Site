/*
 * Handles the submit event of the form
 */
function validate(e){
	hideErrors()

	if(formHasErrors()){
		e.preventDefault();

		return false;
	}
	return true;
}

//trim function
function trim(str) 
{
	return str.replace(/^\s+|\s+$/g,"");
}

//checks the form for input in the text boxes and returns a value
function hasInput(fieldElement){
	if(fieldElement.value == null || trim(fieldElement.value) == ""){
		return false;
	}
	return true;
}

//resets the form when the user presses the clear button
function resetForm(e){
	// Confirm that the user wants to reset the form.
	if (confirm("Reset form?") )
	{
		hideErrors();
		
		
		return true;
	}

	e.preventDefault();
	
	return false;	
}

//Checks the form for any errors and returns a value based on that
function formHasErrors()
{
	var errorFlag = false;
    let requireTextFields = ["fName", "lName", "address", "city", "province", "postal", "email", "phone"]
    //validating all of the text fields to confirm the have options
	for(let i = 0; i < requireTextFields.length; i++){
        console.log(i);
		var textField = document.getElementById(requireTextFields[i])
		
		if(!hasInput(textField)){
			//display correct error message
			document.getElementById(requireTextFields[i] + "_error").style.display = "block";
			document.getElementById(requireTextFields[i]).style.border = "0.75px red solid";
			if(!errorFlag && (i != 3)){
				textField.focus();
			}
			//raise error flag
			errorFlag = true;
		} else {
			document.getElementById(requireTextFields[i] + "_error").style.display = "none";
			document.getElementById(requireTextFields[i]).style.border = "none";
		}
	}
	
	//validating the postal code to confirm it is valid
	let postalRegex = new RegExp(/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/);
	let postalCodeFieldValue = document.getElementById("postal").value;
	if(!postalRegex.test(postalCodeFieldValue)){
		document.getElementById("postalformat_error").style.display = "block";
		document.getElementById("postal").style.border = "0.75px red solid";
		if(!errorFlag){
			document.getElementById("postal").focus();
		}

		errorFlag = true;
	} else {
		document.getElementById("postalformat_error").style.display = "none";
	}

	//validating the email to confirm its valid
	let emailRegex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
	let emailFieldValue = document.getElementById("email").value;
	if(!emailRegex.test(emailFieldValue)){
		document.getElementById("emailformat_error").style.display = "block";
		document.getElementById("email").style.border = "0.75px red solid";
		if(!errorFlag){
			document.getElementById("email").focus();
		}
		errorFlag = true;
	} else {
		document.getElementById("emailformat_error").style.display = "none";
    }
    
    //validating the phone number
    let phoneRegex = new RegExp(/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/);
    let phoneFieldValue = document.getElementById("phone").value;
    if(!phoneRegex.test(phoneFieldValue)){
		document.getElementById("phoneformat_error").style.display = "block";
		document.getElementById("phone").style.border = "0.75px red solid";
		if(!errorFlag){
			document.getElementById("phone").focus();
		}
		errorFlag = true;
	} else {
		document.getElementById("phoneformat_error").style.display = "none";
    }
    return errorFlag;
	//Validating the card type to confirm a value is selected
}

/*
 * Hides all of the error elements.
 */
function hideErrors()
{
	//get a array of the errors
	let errorFields = document.getElementsByClassName("error")

	for(let i = 0; i < errorFields.length; i++){
		errorFields[i].style.display ="none";
	}
}

/*
 * Handles the load event of the document.
 */
function load()
{
	hideErrors();
	document.getElementById("submit").addEventListener("click", validate);
	document.getElementById("clear").addEventListener("click", resetForm);
}

document.addEventListener("DOMContentLoaded", load);












