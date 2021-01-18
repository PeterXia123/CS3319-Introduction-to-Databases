<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "yxia226assign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if(!$connection){
        echo "error: unable to connect to Mysql.".PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exist;
}

if(mysqli_connect_errno()){
        die("database connection failed:" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}
?>
