<?php
 $whichMus = $_POST["pickamuseum"]; //get selected museum value from the form
 $query = "SELECT * FROM workofart WHERE whichmus=".$whichMus.";"; //fill in with correct query
echo $query; 
$result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "<ul>";
while ($row=mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo $row["artname"]."BY".$row["artist"];
	echo "</li>";
 echo "</ul>";} //end the bulleted list
 mysqli_free_result($result);
?>

