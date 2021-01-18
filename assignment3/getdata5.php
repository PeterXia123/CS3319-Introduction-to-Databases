<?php
$query = "SELECT * FROM Westcscourses";
$result = mysqli_query($connection,$query);
if(!$result){
        die("database connect failer");
}
while ($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "id" value = "';
echo $row["course_number"];
echo '">'.$row["course_number"]."</br>";
}
mysqli_free_result($result);
?>

