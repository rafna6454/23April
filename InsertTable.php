<?php
include('config.php');
$name=$_POST['name'];
$salary=$_POST['salary'];
$address=$_POST['address'];
echo $name." ".$salary." ".$address;
$result=mysqli_query($link,"select count(*) as cnt from employee");

while($row=mysqli_fetch_array($result))
{
	$cnt=$row['cnt'];
	echo $cnt;
	$sql="insert into employee(id,name,salary,address) values($cnt+1,'$name','$salary','$address')";
	if(mysqli_query($link,$sql))
	{
		echo "Record inserted";
	}
}
mysqli_close($link);
?>
