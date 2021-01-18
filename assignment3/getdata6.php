<?php
$query = "SELECT * FROM Equivalent";
$result = mysqli_query($connection,$query);
if(!$result){
        die("database connect failer");
}
while ($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "date" value = "';
echo $row["Date"];
echo '">'.$row["Date"]."</br>";
}
mysqli_free_result($result);
?>

