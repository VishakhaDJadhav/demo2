<?php
include ('connection.php');
error_reporting(0);
?>

<html>
<head>
	<h1>Insert your data</h1>
</head>
<body>
	<form action = "" method = "GET" >
	Roll No<input type = "text" name="rollno" value=""/><br><br>
	Name<input type = "text" name = "name" value =""/><br><br>
	class<input type="text" name="class" value=""/><br><br>
	<input type="submit" name="submit" onClick="alert" value="submit data"/>


</form>
<button onclick="location.href='fetch.php'">Back to Home</button>
<?php


if(	$_GET['submit'])
{

$rn = $_GET['rollno'];
$name = $_GET['name'];
$class = $_GET['class'];


	if($rn!="" && $name!="" && $class!="")
	{
		$query = "INSERT INTO crud VALUES ('$rn','$name','$class')";
   		$data = mysqli_query($conn,$query);

   		 if($data)
   		 {
    		alert($msg);

   	   	 }
	}
    else
    {	
   		 echo "values to be insert";
	}
	
}
?>


<?php
$msg = 
"successfully inserted";
// alert("successfully inserted");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
</body>

</html>