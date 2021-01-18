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
<h1>Question1</h1>
<form  action = "getdata.php" method="POST">
<p>Choice of Orders</p>
		Select Order by name or number
		<input type="radio" name="o1" value="course_name" >Course Name 
                <input type="radio" name="o1" value="course_number">Course Number <br>
		Select Asc/Desc
		<input type="radio" name="o2" value="ASC">Ascending Order
                <input type="radio" name="o2" value="DESC">Descending Order
                <input type="submit" name="submit" value="Get Data">

</form>
<h1> Question 2</h1>
<form  action = "update.php" method="post">
<?php
include 'getdata1.php';
?>
New Name: <input type = "text" name = "newname"><br>
New Course Weight : <input type = "number" step = 0.1 name = "newweight"><br>
New Suffix: <input type = "text" name = "newsuffix"><br>
<input type = "submit" name = "submit" value = "Submit"><br>
</form>
<h1> Question3</h1>
<form action = "delete.php" method = "post">
<?php
include 'getdata2.php';
?>
</br>
<input type = "submit" value = "Delete Selected Course">
</form>
<h1> Question 4</h1>
<form action = "add.php" method = "post">
New Course's ID: <input type = "text" name = "id" pattern = "c+s+[0-9]{4,4}"></br>
New Course's Name: <input type ="text" name = "name" ></br>
New Course's Weight: <input type = "number" name = "csw"></br>
New Course's Suffix: <input type = "text" name = "css"></br>
<input type = "submit" value = "Add">
</form>
<h1> Question5</h1>
<form action = "infos.php" method = "post">
<?php
	include 'getdata3.php';
?>
</br>
<input type = 'submit' value = 'View University Infos & Coures'>
</form>
<h1> Question 6</h1>
<form action = "infos2.php" method = "post">
<?php
        include 'getdata4.php';
?>
</br>
<input type = 'submit' value = 'View University Infos'>
</form>
<h1> Question 7</h1>
<form action = "infos3.php" method = "post">
<?php
        include 'getdata5.php';
?>
</br>
<input type = 'submit' value = 'View Infos'>
</form>

<h1> Question 8</h1>
<form action = "infos4.php" method = "post">
<?php
        include 'getdata6.php';
?>
</br>
<input type = 'submit' value = 'View Infos'>
</form>
<h1> Question 9</h1>
<form action = "add3.php" method = "post">
Western Course Number: <input type = "text" name = "id" pattern = "c+s+[0-9]{4,4}"><br>
Equivalent Outside Course Number: <input type = "text" name = "code" ><br>
University ID: <input type = "text" name = "uniqid"><br>
<input type = 'submit' value = 'Add'>
</form>
<h1> Question 10</h1>
<?php
        include 'getdata7.php';
?>



</body>
</html>


