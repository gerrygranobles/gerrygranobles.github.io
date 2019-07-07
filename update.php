<!DOCTYPE html>
<html lang="en"> 
    <title>Computer Security Incident Response Teams Incident Form</title>
        <head>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        </head>
		<body>
		<?php include 'navbar.html';?>
		<div id="incidentform">
		<form action="updatedincident.php" method="get">
                <!-- INCIDENT FORM -->
                <h2>UPDATE INCIDENT FORM</h2>
                    Incident Number: <br>
                    <input type = 'number' name = 'id' required><br>
                   <br>
                <!-- PERSON/VICTIM FORM -->
				<input type="checkbox" name="update" id="val1" value="victim"><b>ADD NEW VICTIM INFORMATION</b><br>
                
                First Name: <br>
                <input type = "text" name = "firstName" disabled><br>
                Last Name: <br>
                <input type = "text" name = "lastName" disabled><br>
                Job Title: <br>
                <input type = "text" name = "jobTitle" disabled><br>
                E-mail Address: <br>
                <input type = "email" name = "emailAddress" disabled><br><br>

				<input type="checkbox" name="update" id="val2" value="ip"><b>ADD NEW IP ADDRESS EFFECTED</b><br>
                    IP Address: <br>
                    <input type = "text" name = "ipAddress" disabled><br><br>
					
				<input type="checkbox" name="update" id="val3" value="state"><b>CHANGE INCIDENT STATE</b><br>
                    
					State: <select name="state" id="state">
                          <option value="">Select</option>
                          <option value="open">Open</option>
                          <option value="closed">Closed</option>
                          <option value="stalled">Stalled</option>
                          </select> <br><br>

				<input type="checkbox" name="update" id="val3" value="comment"><b>NEW COMMENT</b><br>
                   New Comment&#40;s&#41;: <br>
                    <input type = "text" name = "comment" disabled><br>
                    Handler Name: <br>
                    <input type = "text" name = "handlerName" disabled><br><br>

                    <input type="submit" class="button" value="Submit">
                </form>
            </div>       
 <script>
// REQUIRE VICTIM INFO
var victimCheckBox = document.querySelector('input[type="checkbox"][value="victim"]');
var firstName = document.querySelector('input[type="text"][name = "firstName"]');
var lastName = document.querySelector('input[type="text"][name = "lastName"]');
var jobTitle = document.querySelector('input[type="text"][name = "jobTitle"]');
var emailAddress = document.querySelector('input[type="email"][name = "emailAddress"]');

function victimRequired() {

    if (firstName.hasAttribute('required') !== true) {
        firstName.removeAttribute('disabled');
		lastName.removeAttribute('disabled');
		jobTitle.removeAttribute('disabled');
		emailAddress.removeAttribute('disabled');
		
		firstName.setAttribute('required','required');
        lastName.setAttribute('required','required');
        jobTitle.setAttribute('required','required');
        emailAddress.setAttribute('required','required');
    }
    else {
		firstName.disabled=true;
		lastName.disabled = true; 
        jobTitle.disabled = true;
        emailAddress.disabled = true;
		
        firstName.removeAttribute('required');  
        lastName.removeAttribute('required'); 
        jobTitle.setAttribute('required');
        emailAddress.setAttribute('required'); 
    }
}

victimCheckBox.addEventListener('change',victimRequired,false);

// REQUIRE IP ADDRESS
var ipCheckBox = document.querySelector('input[type="checkbox"][value="ip"]');
var ipAddress = document.querySelector('input[type="text"][name = "ipAddress"]');

function ipRequired() {

    if (ipAddress.hasAttribute('required') !== true) {
        ipAddress.setAttribute('required','required');
		ipAddress.removeAttribute('disabled');
    }
    else {
		ipAddress.disabled=true;
        ipAddress.removeAttribute('required');  
    }
}

ipCheckBox.addEventListener('change',ipRequired,false);

// REQUIRE STATE
var stateCheckBox = document.querySelector('input[type="checkbox"][value="state"]');
var state = document.getElementById("state");
var statevalue = state.options[state.selectedIndex].text;

function stateRequired() {
	if(statevalue === "Select") {
		state.setAttribute('required','required');
		
	}
	else {
        state.removeAttribute('required');  
    }
}
stateCheckBox.addEventListener('change',stateRequired,false);

// REQUIRE COMMENT
var commentCheckBox = document.querySelector('input[type="checkbox"][value="comment"]');
var comment = document.querySelector('input[type="text"][name = "comment"]');
var handlerName = document.querySelector('input[type="text"][name = "handlerName"]');

function commentRequired() {
    if (comment.hasAttribute('required') !== true) {	
        comment.setAttribute('required','required');
        handlerName.setAttribute('required','required');
		comment.removeAttribute('disabled');
		handlerName.removeAttribute('disabled');
    }

    else {
		handlerName.disabled=true;
		comment.disabled=true;
        comment.removeAttribute('required');  
        handlerName.removeAttribute('required');  
    }
}

commentCheckBox.addEventListener('change',commentRequired,false);
</script>

		</body>
</html>