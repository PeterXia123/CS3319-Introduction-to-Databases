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
$id = $_POST['id'];
$query = 'SELECT * FROM Westcscourses WHERE course_number="'.$id.'"';
$result = mysqli_query($connection,$query);
if(!$result){
        die("Database query Failed");
}
while ($row=mysqli_fetch_assoc($result)){
echo "Course Name: ".$row["course_name"]."; Course Number: ".$row["course_number"]."; Course Weight: ".$row["Weight"]. "<br>";
}
mysqli_free_result($result);
?>
<?php
$id = $_POST['id'];
$query = 'SELECT * FROM Equivalent, Universities, Outsidecourses WHERE Westerncourse="'.$id.'" AND Universities.Unique_ID=Equivalent.University_ID AND Universities.Unique_ID=
Outsidecourses.University_ID AND Equivalent.Outsidecourse=Outsidecourses.course_code';
$result = mysqli_query($connection,$query);
if(!$result){
        die("Database query Failed");
}
echo "<ol>";
while ($row=mysqli_fetch_assoc($result)){
echo "<li>";
echo "University Name: ".$row["Official_name"]."; Course Name: ".$row["course_name"]."; Course Number: ".$row["course_code"]."; Course Weight: " .$row["Weight"]."; Equivalency Date: ".$row["Date"]."</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
</body>
</html>



