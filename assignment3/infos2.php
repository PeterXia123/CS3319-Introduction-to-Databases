<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
	$pcode = $_POST['pcode'];
	$query = 'SELECT * FROM Universities WHERE Province_code = "'.$pcode.'"';
	$result = mysqli_query($connection,$query);
	if (!$result){
		die("database query failed.");
	}
	echo "<ol>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo "Names: ".$row["Official_name"]."; Nickname: ".$row["Nick_name"]."</li>";
	}
	mysqli_free_result($result);
	echo "</ol>";
?>
<?php
mysqli_close($connection);
?>
</body>
</html>


