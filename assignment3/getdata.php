<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title> A3</title>
<?php
include 'connectdb.php';
if (isset($_POST['o1'])){
	$result1 = $_POST['o1'];
}
if (isset($_POST['o2'])){
        $result2 = $_POST['o2'];
}

$query = "SELECT * FROM Westcscourses ORDER BY $result1 $result2";
$result = mysqli_query($connection,$query);
if(!$result){
        die("databases query failed.");
}
while($row = mysqli_fetch_assoc($result)){
	echo "<li>";
	echo "Course Number: " . $row["course_number"]. ", Course Name: ". $row["course_name"]. 
	", Course Weight: " . $row["Weight"]. ", Course Suffix: ". $row["Suffix"] ."</li>";
}
mysqli_free_result($result);
?>

</body>
</html>

