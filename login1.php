<?php
$name=$_POST["name"];

$conn=mysqli_connect("localhost","root","","demo");
$query="select name from oop where name='$name' limit 1";
$query=mysqli_query($conn,$query);

if(mysqli_fetch_row($query)>1)
{
	echo "valid name";
}
else
{
	echo "not valid";
}
	
?>