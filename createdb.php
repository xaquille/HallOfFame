<?php
$sname="localhost";
$uname="root";
$pass="toor";
$dbname="halloffame";

$con= mysqli_connect($sname,$uname,$pass,$dbname);
if (!$con){
    die("connection failed: ".mysqli_connect_error());
}

$sql= "CREATE Table hunter (id_hunter int(6) AUTO_INCREMENT not null primary key, name varchar(30) not null, title varchar(100) not null, risk varchar(10) NOT NUll, date DATE, nocert varchar(100) not null, link varchar(100) not null) ";

if (mysqli_query($con,$sql)){
    echo "table hunter created!";
}else{
    echo "error creating table : ".mysqli_error($con);
}
mysqli_close($con);
?>