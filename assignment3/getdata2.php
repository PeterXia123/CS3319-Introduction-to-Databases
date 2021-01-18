<?php
$query = "SELECT * FROM Westcscourses";
$result = mysqli_query($connection, $query);
if (!$result){
	dies("database query failer.");
}
while ($row = mysqli_fetch_assoc($result)){
	echo '<input type="radio" name="id" value="';
	echo $row["course_number"];
	echo '">'.$row["course_name"];
}
mysqli_free_result($result);
?>
