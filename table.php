<?php
// creates array
$data = array(
array("fname"=> "Bob", "lname"=> "Duster", "id"=> 123452),
array("fname"=> "Dusty", "lname"=> "Brown", "id"=> 432123),
array("fname"=> "Fred", "lname"=> "Hampton", "id"=> 433123),
array("fname"=> "Adele", "lname"=> "Smith", "id"=> 587656),
array("fname"=> "Porche", "lname"=> "Doe", "id"=> 743134),
array("fname"=> "Einrich", "lname"=> "Everest", "id"=> 986421),
array("fname"=> "Erasmus", "lname"=> "Fencesitter", "id"=> 621233)
);
// table name
echo "<center>My Table</center>";
// creates table with solid border and 100% width
echo "<table border=solid style=width:100%>";

// takes the array index names to give each table column a header
foreach($data as $row) {
	echo "<tr>";
	foreach($row as $label=>$column) {
		echo '<th>' . $label . '</th>';
	}
	echo "</tr>";
	break;
}
// takes elements from the array and prints them accordingly in the table
foreach($data as $innerArray){
	echo "<tr>";
	foreach($innerArray as $elementsOfInnerArray){
		echo "<td>$elementsOfInnerArray</td>";
	}
	echo "</tr>";
}   
echo "</table>";
?>