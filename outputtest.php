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
		include 'view.php';
		
		
		echo "<div id='content'>";
		$id=$_POST["id"];
		
        $sql = "SELECT * FROM `incident` WHERE id LIKE '".$id."'";
		
        $result = $db->query($sql);
        if(!$result){
                echo "Incident not found." . $db->error;
        }
        else{
                echo "<br><b>Incident ID #" .$id."</b>";

			//two methods
			$table = $result->fetch_all();
			//var_dump($table);
			echo "<table border = '1'>";
			foreach($table as $row){
					echo "<tr>";
					foreach($row as $value){
							echo "<td>$value</td>";
					}
	echo "</tr>";
			}
}
echo "</div>";

?>

