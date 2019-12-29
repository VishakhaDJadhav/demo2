<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";
<<<<<<< HEAD
// by me
=======
//by vishakha
//by me
>>>>>>> a22129b6e0b1cf9958f774bf33dc93df1fe4777f
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}


else
{
	echo "Connection failed";
	die("connection failed because".mysqli_connect_error);
}

?>
