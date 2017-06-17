<?php

$link=mysqli_connect(
				'localhost:3306',
				'root',
				'x82jis94',
				'phphw6');
if($link){
	echo"DB connect";
}else{
	echo"DB connect failed";
}
$name=$_GET["name"];
$birthday=$_GET["birthday"];
$phone=$_GET["phone"];
$email=$_GET["email"];
$size=$_GET["size"];
$ps=$_GET["ps"];

$insert="INSERT INTO hw6 (name,birthday,phone,email,size,ps) VALUES ('$name','$birthday','$phone','$email','$size','$ps')";
$result=mysqli_query($link,$insert);
$result=mysqli_query($link,"SELECT * FROM hw6");
echo "<table border=1>";
while ($row=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>";	
	echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["birthday"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["email"];
	echo "</td><td>";
	echo $row["size"];
	echo "</td><td>";
	echo $row["ps"];
	echo "</td>";
	echo "</tr>";
}
echo "<table>";
mysqli_close($link);


?>