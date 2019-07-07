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
		
		include 'navbar.html';
		echo "<div id='view'>";
		echo "<br>";
        if(isset($_REQUEST['id'])){    $id=$_REQUEST['id']; }
	   
        if(isset($_REQUEST['firstName'])){    $firstName=$_REQUEST['firstName']; }
		
        if(isset($_REQUEST['lastName'])){    $lastName=$_REQUEST['lastName'];  }
        if(isset($_REQUEST['jobTitle'])){    $jobTitle=$_REQUEST['jobTitle']; }
        if(isset($_REQUEST['emailAddress'])){    $emailAddress=$_REQUEST['emailAddress']; }
		
        if(isset($_REQUEST['ipAddress'])){    $ipAddress=$_REQUEST['ipAddress']; }
		
        if(isset($_REQUEST['state'])){    $state=$_REQUEST['state']; }
		
        if(isset($_REQUEST['comment'])){    $comment=$_REQUEST['comment']; }
        if(isset($_REQUEST['handlerName'])){    $handlerName=$_REQUEST['handlerName'];  }
		
		
		/* ADDING NEW VICTIM */
        if(!empty($_REQUEST['firstName'])) {
                $sql = "INSERT INTO `victim` (`id`, `firstName`, `lastName`, `jobTitle`,`emailAddress`)
							   VALUES ($id, '$firstName', '$lastName', '$jobTitle', '$emailAddress');";		
				if ($db->query($sql) === TRUE) {
					echo "Victim added successfully<br>";
				} else {
					echo "Error: " . $sql . "<br>" . $db->error;
				}
		}
		/* ADDING NEW AFFECTED IP */
		if(!empty($_REQUEST['ipAddress'])){
                $sql = "INSERT INTO `ipAddress` (`id`, `ipAddress`)
							   VALUES ($id,'$ipAddress');";
			if ($db->query($sql) === TRUE) {
				echo "IP added successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . $db->error;
			}
		}
		
		/* CHANGING INCIDENT STATE */
		if(!empty($_REQUEST['state']) && $_REQUEST['state'] !== "Select"){
                $sql = "UPDATE `incident` SET `state` = '$state ' WHERE (`id` = '$id');";
			if ($db->query($sql) === TRUE) {
				echo "State updated successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . $db->error;
			}
		}
		
		/* ADDING NEW COMMENT */
		if(!empty($_REQUEST['comment'])){
				$sql = "INSERT INTO `comment` (`id`, `handlerName`, `comment`)
							    VALUES ($id,'$handlerName', '$comment');";	
				if ($db->query($sql) === TRUE) {
					echo "Comment added successfully<br>";
				} else {
					echo "Error: " . $sql . "<br>" . $db->error;
				}
		}
		
       /* GET SINGLE INCIDENT RESULT FROM VIEWINCIDENT */
        $sql = "SELECT * FROM `incident` WHERE id LIKE '".$id."'"; 
        $result = $db->query($sql);
        if($result->num_rows <= 0){
            echo "<i>Incident not found.</i>" .$db->error;
        }
        else {
            echo "<br><b>INCIDENT " .$id."</b>";

			$table = $result->fetch_all();
			echo "<table border = '1' width='89%' id='t02'>";
			echo "<tr>
				<td><strong>INCIDENT ID</strong></td>
				<td><strong>TYPE</strong></td>
				<td><strong>DATE</strong></td>
				<td><strong>STATE</strong></td>
				<td><strong>IP ADDRESS</strong></td>
				<td><strong>VICTIM NUMBER</strong></td>
				<td><strong>COMMENT(S)</strong></td>
				</tr>";
			foreach($table as $row){
					echo "<tr>";
					$count = 1;
					foreach($row as $value){
						if($count==1) $id = $value;
                        if ($count==2) { 
							$sqlt = "SELECT * FROM `type`WHERE typeID LIKE '".$value."'";
							$typeID = $db->query($sqlt);
							$row = mysqli_fetch_row($typeID);
							echo "<td>$row[1]</td>";
						} 
						else if ($count==5) {
                            $sqlip = "SELECT * FROM `ipAddress` WHERE id LIKE '".$id."'";
                            $ips = $db->query($sqlip);
							$iptable = $ips->fetch_all();
                           echo "<td>";
						   echo "<table border = '0' >";
							 foreach($iptable as $row){
								echo "<tr>";
								
									echo "<td>$row[1]</td>";
								
								echo "</tr>";
							}
							echo "</table>";
							echo "</td>";
						}
						else if ($count==6) {
                            $sqlvic = "SELECT * FROM `victim` WHERE id LIKE '".$id."'";
                            $victims = $db->query($sqlvic);
							$victimtable = $victims->fetch_all();
                           echo "<td>";
						   echo "<table border = '0' >";
							 foreach($victimtable as $row){
								echo "<tr>";
								
									echo "<td>$row[0]</td>";
								
								echo "</tr>";
							}
							echo "</table>";
							echo "</td>";
						}
                        else if ($count==7) {
                            $sqlc = "SELECT * FROM `comment`WHERE id LIKE '".$id."'";
                            $comments = $db->query($sqlc);
							$commenttable = $comments->fetch_all();
                           echo "<td>";
						   echo "<table border = '0' >";
							 foreach($commenttable as $row){
								echo "<tr>";
								
									echo "<td>$row[1] - $row[2]</td>";
								
								echo "</tr>";
							}
							echo "</table>";
							echo "</td>";
						}
						else {
							echo "<td>$value</td>";
						}
					++$count;
					}
					
				echo "</tr>";
			}
			
		echo "</table>";
	}
echo "</div>";

?>