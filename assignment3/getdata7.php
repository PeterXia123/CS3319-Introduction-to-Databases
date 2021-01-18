<?php
$query = "SELECT * FROM Universities WHERE Unique_ID NOT IN (SELECT e.University_ID FROM Equivalent AS e, Outsidecourses AS o, Westcscourses AS w, Universities AS u WHERE
e.Outsidecourse=o.course_code AND e.Westerncourse=w.course_number AND e.University_ID=o.University_ID AND o.University_ID = u.Unique_ID)";
$result = mysqli_query($connection,$query);
if(!$result){
        die("database connect failer");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)){
echo "<li>";
echo "University Name: ".$row["Official_name"]."; Nickname: ".$row["Nick_name"]."</li>";
}
mysqli_free_result($result);
?>
