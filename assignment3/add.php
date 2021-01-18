<!DOCTYPE html>
<html>
<head>
<meta charset = "uttf-8">
<title> Assignment 3 </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$csw = $_POST['csw'];
$css = $_POST['css'];
$query = 'INSERT INTO Westcscourses (course_number, course_name,Weight,Suffix) VALUES ("'.$id.'","'.$name.'","'.$csw.'","'.$css.'")';
if (!mysqli_query($connection, $query)){
	die("Error: Adding Course Failed"." ".mysqli_error($connection));
}
echo " added";
?>
<?php
mysqli_close($connection);
?>
</body>
</html>


