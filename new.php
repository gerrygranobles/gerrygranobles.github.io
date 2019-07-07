<!DOCTYPE html>
<html lang="en"> 
    <title>Computer Security Incident Response Teams Incident Form</title>
        <head>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        </head>
		<body onload="javascript:ShowHideDiv()">
		<?php include 'navbar.html';?>
		<div id="incidentform">
		<form action="newincident.php" method="get">
                <!-- INCIDENT FORM -->
                <h2>NEW INCIDENT FORM</h2>

                <!-- PERSON/VICTIM FORM -->
                <b>VICTIM INFORMATION</b><br>
                First Name: <br>
                <input type = 'text' name = 'firstName' required><br>
                Last Name: <br>
                <input type = 'text' name = 'lastName' required><br>
                Job Title: <br>
                <input type = 'text' name = 'jobTitle' required><br>
                E-mail Address: <br>
                <input type = 'email' name = 'emailAddress' required><br><br>


                <b>INCIDENT INFORMATION</b><br>
                   <script type="text/javascript">
    function ShowHideDiv() {
        var other = document.getElementById("other");
        var dvOther = document.getElementById("dvOther");
        dvOther.style.display = other.checked ? "block" : "none";
    }
	

function otherRequired() {
    var handlerName = document.getElementById("otherInput");
	if (handlerName.hasAttribute('required') !== true) {	
        handlerName.setAttribute('required','required');
		handlerName.removeAttribute('disabled');
    }
    else {
		handlerName.disabled=true;
        handlerName.removeAttribute('required');  
    }
}

//commentCheckBox.addEventListener('change',commentRequired,false);
</script>
<span>Type:</span><br>
<?php
        $host = "localhost";
        $user = "geraldinegranobles";
        $pw = "";
        $database = "geraldinegranobles";
        $db = new mysqli($host, $user, $pw, $database);
        if ($db->connect_errno) {
                echo "Connect failed: ". $db->connect_error;
                exit();
        }
		 $sql = "SELECT MAX(typeID) AS max FROM `type`;" ;
		
        $result = $db->query($sql);
		
	$row = mysqli_fetch_array($result);
	
	$max = $row['max'];
	$sql = "SELECT * FROM type WHERE typeID LIKE 1;";
		$value = $db->query($sql);
		$row = mysqli_fetch_row($value);
		
		
	?>
	<label for="<?=$row[1] ?>">
	<input type="radio" id="$str" name="type" value='1' onclick="ShowHideDiv()" checked /> <?=$row[1]?></label><br>
	<?php
	
	for ($i = 2; $i<=$max; $i++) {
		$sql = "SELECT * FROM type WHERE typeID LIKE '".$i."';";
		$value = $db->query($sql);
		$row = mysqli_fetch_row($value);
		
		$str = strval($i);
		
		?>
		<label for="<?=$row[1] ?>">
		<input type="radio" id="$str" name="type" value ="<?= $i ?>" onclick="ShowHideDiv()"/> <?=$row[1]?></label><br>
		<?php
		}
		?>
	

<label for="other">
    <input type="radio" id="other" name="type" value="other" onclick="ShowHideDiv(); otherRequired()"/>Other:
</label>


<div id="dvOther">
    <input type="text" name ="otherInput" id="otherInput" />
</div>
<br>
                    IP Address Affected: <br>
                    <input type = 'text' name = 'ipAddress' required><br>
                    Date:
                    <input type = 'date' name = 'date' required><br>
                    State: <select name="state" id="state">
                          <option  value="open">Open</option>
                          <option  value="closed">Closed</option>
                          <option  value="stalled">Stalled</option>
                          </select> <br>

                    Comment&#40;s&#41;: <br>
                    <input type = 'text' name = 'comment' required><br>
                    Handler Name: <br>
                    <input type = 'text' name = 'handlerName' required><br><br>



                    <input type="submit" class="button" value="Submit" required>
                </form>
            </div>
		</body>
</html>