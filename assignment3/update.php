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
<h1> Change Course Name</h1>
<?php
if ( isset($_POST['id'])){
	$id = $_POST['id'];
}
if (isset($_POST['newname'])){
	$name = $_POST['newname'];
	$sql = "UPDATE Westcscourses SET course_name='$name'  WHERE course_number='$id' ";
	$result = mysqli_query($connection, $sql);
	if ($result){
        echo "Updated";
}else{
        echo "Input Values";
}
}
?>

<h1> Change Course Weight </h1>
<?php
if (isset($_POST['newweight'])){
        $newweight = $_POST['newweight'];
$sql = "UPDATE Westcscourses SET Weight = '$newweight' WHERE course_number = '$id' ";
        $result = mysqli_query($connection, $sql);
	if ($result){
        echo "updated";
}else{
        echo "Please put values";
}
}
?>
<h1> Change Course Suffix </h1>
<?php
if (isset($_POST['newsuffix'])){
        $newsuffix = $_POST['newsuffix'];
$sql = "UPDATE Westcscourses SET suffix = '$newsuffix' WHERE course_number = '$id' ";
        $result = mysqli_query($connection, $sql);
        if ($result){
        echo "Updated";
}else{
        echo " Please put values";
}
}
?>

</body>
</html>

