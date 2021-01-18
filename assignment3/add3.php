<!DOCTYPE html>
<html>
<head>
<meta charset = "uttf-8">
<title> A3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1> Add A New Equivalent Course </h1>
<?php
$id = $_POST['id'];
$code = $_POST['code'];
$uniqid = $_POST['uniqid'];
$query1 = 'SELECT course_numbwe FROM Westcscourses WHERE course_number = "'.$id.'"';
$query2 = 'SELECT course_code FROM Outsidecourses WHERE course_code = "'.$code.'"';
$check1 = mysqli_query($connection, $query1);
$check2 = mysqli_query($connection, $query2);
if($check1->num_rows==0){
	echo "Western Does not have this Course.";
}else{
	if ($check2->num_rows==0){
		echo "Outside University Does not have this course.";
	}else{
	
	$query = 'INSERT INTO Equivalent (Westerncourse, Outsidecourse,University_ID,Date) VALUES ("'.$id.'","'.$code.'","'.$uniqid.'",CURDATE())';
	if (!mysqli_query($connection, $query)){
        	die("Error: Adding Course Failed"." ".mysqli_error($connection));
		}
echo " Equivalent Course is Added";
}
}
?>
<?php
mysqli_close($connection);
?>
</body>
</html>



