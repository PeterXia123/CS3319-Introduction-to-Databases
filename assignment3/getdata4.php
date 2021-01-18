<?php
$query = "SELECT DISTINCT Province_code FROM Universities";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database connect failer");
}
echo "Select the Province:"."<br>";
while ($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "pcode" value = "';
echo $row["Province_code"];
echo '">'.$row["Province_code"]."</br>";
}
mysqli_free_result($result);
?>

