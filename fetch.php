<?php
include ('connection.php');
error_reporting(0);
$query = "SELECT *FROM CRUD";

$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total!=0)
{
		?>
		<table border="1" >
			<tr>
				<th>RollNo</th>
				<th>Name</th>
				<th>Class</th>
			</tr>
		


		<?php

		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr>
				<td>".$result['RollNo']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Class']."</td>
			</tr>";
		}
}
else
{
	echo "No Record in table";
}


?>
</table>
	