<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> A3</title>
</head>
<?php
include 'connectdb.php';
?>
<?php
	$id=$_POST["id"];
	$query = "SELECT Westerncourse FROM Equivalent WHERE Westerncourse='$id'";
	$result = mysqli_query($connection, $query);
	if($result->num_rows == 0){
		$query1 = 'DELETE FROM Westcscourses WHERE course_number="'.$id.'"';
		$resulted = mysqli_query($connection, $query1);
		if (!$resulted){
			die("database query failed");
		}
		echo "Course Deleted";
	}else{
		echo "This course is equivalent to outside course."."<br>";
		echo "Do you still want to delete the course?".$id;
	}
?>
<form action = "delete2.php" method = "post">
<input type="radio" name="delete" value="Yes"> Yes <br>
<input type="radio" name="delete" value="No"> No <br>
Enter the course id to confirm you want to delete <input type = "text" name="csid"><br>
<input type="submit" value="Delete Course">
<?php
	mysqli_close($connection);
?>
</form>
</body>
</html>

