<?php
include('config.php');
$sql="select * from employee";
if($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>name</th>";
		echo "<th>salary</th>";
		echo "<th>address</th>";
		echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["salary"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No matching records are found!";
	}
}
else
{
	echo "ERROR:Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
