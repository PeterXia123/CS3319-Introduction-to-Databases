<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title> A3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
$result = $_POST["delete"];
$id = $_POST["id"];
if($ans == "Yes"){
	$query = 'DELETE FROM Westcscourses WHERE course_number="'.$id.'"';
	if(!mysqli_query($connection, $query)){
		die("Error: Fail to Delete".mysqli_error($connection));}
	echo "Deleted.";
}else{
echo "Course is not Deleted.";
}
mysqli_close($connection);
?>
</body>
</html>

