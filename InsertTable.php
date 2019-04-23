<?php
include('config.php');

$name = $_POST['name'];
$salary = $_POST['salary'];
$address = $_POST['address'];
echo $name."".$salary. " " . $address;
 
//$result = mysqli_query($link, "select count(*) as cnt from employee");

$res = mysqli_query($link,"insert into employee(name,salary,address) values('$name','$salary','$address')");
if(mysqli_query($link,$res))
{
   echo "Record inserted successfully";
}

//while($row=mysql_fetch_array($result))
//{
//$cnt = $row('cnt');
//echo $cnt;

//$sql = "Insert into employee(name,salary,address) values ('$name','$salary','$address');


mysqli_close($link);
?>
