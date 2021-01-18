<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> A3</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<?php
$uniqid = $_POST['uniqid'];
$query = 'SELECT * FROM Universities WHERE Unique_ID="'.$uniqid.'"';
$result = mysqli_query($connection,$query);
if(!$result){
	die("Database query Failed");
}
while ($row=mysqli_fetch_assoc($result)){
echo "Unique ID: ".$row["Unique_ID"]."; University Name: ".$row["Official_name"]."; Province: ".$row["Province_code"]."; Nick Name: ".$row["Nick_name"];
}
mysqli_free_result($result);
?>
<?php
$uniqid = $_POST['uniqid'];
$query = 'SELECT * FROM Outsidecourses WHERE University_ID="'.$uniqid.'"';
$result = mysqli_query($connection,$query);
if(!$result){
        die("Database query Failed");
}
while ($row=mysqli_fetch_assoc($result)){
echo "<li>";
echo $row["course_name"]."</li>";
}
mysqli_free_result($result);
?>
</body>
</html>

