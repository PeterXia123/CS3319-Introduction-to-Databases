<?php
$query = "SELECT * FROM Universities ORDER BY Province_code";
$result = mysqli_query($connection, $query);
if (!$result){
	die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)){
	echo '<input type = "radio" name = "uniqid" value = "';
	echo $row["Unique_ID"];
	echo '">'.$row["Official_name"]."<br>";
}
mysqli_free_result($result);
?>

