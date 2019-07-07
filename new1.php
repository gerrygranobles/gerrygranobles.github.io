<?php
$arrayOfArray = array(
array("one", "two"),
array("three", "four")
);
echo "<table border=solid>";
foreach($arrayOfArray as $innerArray){
echo "<tr>";
foreach($innerArray as $elementsOfInnerArray){
echo "<td>$elementsOfInnerArray</td>";
}
echo "</tr>";
}
echo "</table>";
?>