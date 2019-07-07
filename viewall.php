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
		include 'viewincident.html';
		
		include 'viewall.html';
		echo "<div id='viewall'>";
		
        $sql = "SELECT * FROM `incident`";
		
        $result = $db->query($sql);
        if(!$result){
                echo "Incident not found." . $db->error;
        }
        else{
                echo "<br><b>ALL INCIDENTS</b>";

			//two methods
			$table = $result->fetch_all();
			//var_dump($table);
			echo "<table border = '1' width='89%' id='t02'>";
			echo "<tr>
				<td><strong>INCIDENT ID</strong></td>
				<td><strong>TYPE</strong></td>
				<td><strong>DATE</strong></td>
				<td><strong>STATE</strong></td>
				<td><strong>IP ADDRESS</strong></td>
				<td><strong>VICTIM NUMBER</strong></td>
				<td><strong>COMMENTS</strong></td>
				</tr>";
			
			foreach($table as $row){
					echo "<tr>";
					$count = 1;
					foreach($row as $value){
						if($count==1) $id = $value;
                        if ($count==2) { 
                        $sqlt = "SELECT * FROM `type` WHERE typeID LIKE '".$value."'";
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
                            $sqlc = "SELECT * FROM `comment` WHERE id LIKE '".$id."'";
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
echo "<br>";
echo "<br>";
echo "<br>";
echo "</div>";

echo "</div>";
?>

